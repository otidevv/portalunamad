<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CampanasGobPeService
{
    private const FUENTE_URL = 'https://www.gob.pe/institucion/unamad/campa%C3%B1as';

    private const BASE_URL = 'https://www.gob.pe';

    private const HREF_FILTRO = '/campa%C3%B1as/';

    private const CACHE_KEY = 'campanas_gob_pe_unamad';

    private const CACHE_TTL_MIN = 30;

    public function obtener(int $limite = 8): array
    {
        $items = Cache::remember(
            self::CACHE_KEY,
            now()->addMinutes(self::CACHE_TTL_MIN),
            fn () => $this->fetch()
        );

        return array_slice($items, 0, $limite);
    }

    public function fuenteUrl(): string
    {
        return self::FUENTE_URL;
    }

    private function fetch(): array
    {
        try {
            $response = Http::timeout(15)
                ->withHeaders([
                    'User-Agent' => 'Mozilla/5.0 (compatible; UNAMAD-Portal/1.0; +https://unamad.edu.pe)',
                    'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9',
                    'Accept-Language' => 'es-PE,es;q=0.9',
                ])
                ->get(self::FUENTE_URL);

            if (! $response->ok()) {
                Log::warning('gob.pe campañas scraping HTTP no OK', ['status' => $response->status()]);

                return [];
            }

            return $this->parse($response->body());
        } catch (\Throwable $e) {
            Log::error('Error scraping gob.pe campañas', ['error' => $e->getMessage()]);

            return [];
        }
    }

    private function parse(string $html): array
    {
        $doc = new \DOMDocument();
        libxml_use_internal_errors(true);
        $doc->loadHTML('<?xml encoding="UTF-8">'.$html, LIBXML_NOERROR | LIBXML_NOWARNING);
        libxml_clear_errors();

        $xpath = new \DOMXPath($doc);

        $items = $xpath->query(
            "//li[.//a[contains(@href, '".self::HREF_FILTRO."')]] | //div[contains(concat(' ', normalize-space(@class), ' '), ' card ') and .//a[contains(@href, '".self::HREF_FILTRO."')]]"
        );

        $campanas = [];
        $vistos = [];

        foreach ($items as $item) {
            $links = $xpath->query(".//a[contains(@href, '".self::HREF_FILTRO."')]", $item);
            if ($links->length === 0) {
                continue;
            }

            $mejorLink = null;
            $mejorLargo = 0;
            foreach ($links as $l) {
                $largo = strlen(trim($l->textContent));
                if ($largo > $mejorLargo) {
                    $mejorLargo = $largo;
                    $mejorLink = $l;
                }
            }
            if (! $mejorLink) {
                continue;
            }

            $href = $mejorLink->getAttribute('href');
            if ($href && str_starts_with($href, '/')) {
                $href = self::BASE_URL.$href;
            }

            if (isset($vistos[$href])) {
                continue;
            }
            $vistos[$href] = true;

            $img = $xpath->query('.//img', $item)->item(0);
            $time = $xpath->query('.//time', $item)->item(0);

            $imgSrc = null;
            if ($img) {
                $imgSrc = $img->getAttribute('src') ?: $img->getAttribute('data-src');
                if ($imgSrc && str_starts_with($imgSrc, '/')) {
                    $imgSrc = self::BASE_URL.$imgSrc;
                }
            }

            $fechaIso = $time ? $time->getAttribute('datetime') : null;
            $fechaTexto = $time ? trim(preg_replace('/\s+/', ' ', $time->textContent)) : null;

            $campanas[] = [
                'titulo' => trim(preg_replace('/\s+/', ' ', $mejorLink->textContent)),
                'enlace' => $href,
                'imagen' => $imgSrc,
                'fecha_iso' => $fechaIso ?: null,
                'fecha_texto' => $fechaTexto,
            ];
        }

        usort($campanas, fn ($a, $b) => strcmp($b['fecha_iso'] ?? '', $a['fecha_iso'] ?? ''));

        return $campanas;
    }
}
