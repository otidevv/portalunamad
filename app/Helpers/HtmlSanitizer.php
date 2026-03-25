<?php

namespace App\Helpers;

class HtmlSanitizer
{
    /**
     * Tags HTML permitidos (seguros para contenido de comunicados).
     * Bloquea: script, iframe, object, embed, form, input, link, meta, style
     * Esto previene inyección de SEO spam (apuestas, casino) y XSS.
     */
    private static array $allowedTags = [
        'p', 'br', 'strong', 'b', 'em', 'i', 'u', 's', 'del',
        'h1', 'h2', 'h3', 'h4', 'h5', 'h6',
        'ul', 'ol', 'li',
        'a', 'img',
        'table', 'thead', 'tbody', 'tr', 'th', 'td',
        'blockquote', 'pre', 'code',
        'div', 'span', 'hr',
        'figure', 'figcaption',
        'sup', 'sub',
    ];

    /**
     * Atributos permitidos por tag.
     */
    private static array $allowedAttributes = [
        'a' => ['href', 'title', 'target', 'rel'],
        'img' => ['src', 'alt', 'width', 'height', 'loading'],
        'td' => ['colspan', 'rowspan'],
        'th' => ['colspan', 'rowspan'],
        'div' => ['class'],
        'span' => ['class'],
        'p' => ['class'],
        'table' => ['class'],
    ];

    /**
     * Sanitiza HTML removiendo tags y atributos peligrosos.
     */
    public static function clean(?string $html): string
    {
        if (empty($html)) {
            return '';
        }

        // 1. Remover tags no permitidos
        $allowedTagsStr = '<' . implode('><', self::$allowedTags) . '>';
        $html = strip_tags($html, $allowedTagsStr);

        // 2. Remover atributos peligrosos (on*, style con expression/url, javascript:)
        // Remover cualquier atributo on* (onclick, onerror, onload, etc.)
        $html = preg_replace('/\s+on\w+\s*=\s*["\'][^"\']*["\']/i', '', $html);
        $html = preg_replace('/\s+on\w+\s*=\s*\S+/i', '', $html);

        // 3. Remover javascript: en href y src
        $html = preg_replace('/href\s*=\s*["\']javascript:[^"\']*["\']/i', 'href="#"', $html);
        $html = preg_replace('/src\s*=\s*["\']javascript:[^"\']*["\']/i', 'src=""', $html);

        // 4. Remover data: URIs en src (pueden contener scripts)
        $html = preg_replace('/src\s*=\s*["\']data:[^"\']*["\']/i', 'src=""', $html);

        // 5. Forzar rel="noopener noreferrer" en todos los enlaces con target="_blank"
        $html = preg_replace(
            '/<a\s([^>]*target\s*=\s*["\']_blank["\'][^>]*)>/i',
            '<a $1 rel="noopener noreferrer">',
            $html
        );

        // 6. Remover style attributes que puedan contener expression() o url()
        $html = preg_replace('/\s+style\s*=\s*["\'][^"\']*["\']/i', '', $html);

        return $html;
    }
}
