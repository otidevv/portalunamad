<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidateFileUpload
{
    /**
     * Extensiones peligrosas que NUNCA deben subirse.
     * Previene inyección de shells PHP, scripts y archivos de configuración.
     */
    private array $blockedExtensions = [
        'php', 'php3', 'php4', 'php5', 'php7', 'php8', 'phtml', 'phar',
        'exe', 'bat', 'cmd', 'sh', 'bash', 'cgi', 'pl', 'py', 'rb',
        'htaccess', 'htpasswd', 'ini', 'env', 'config',
        'jsp', 'asp', 'aspx', 'js', 'html', 'htm', 'svg',
    ];

    public function handle(Request $request, Closure $next): Response
    {
        if ($request->hasFile('*') || count($request->allFiles()) > 0) {
            foreach ($request->allFiles() as $key => $files) {
                $fileList = is_array($files) ? $files : [$files];
                foreach ($fileList as $file) {
                    if (!$file || !$file->isValid()) {
                        continue;
                    }

                    $extension = strtolower($file->getClientOriginalExtension());

                    // Bloquear extensiones peligrosas
                    if (in_array($extension, $this->blockedExtensions)) {
                        abort(422, 'Tipo de archivo no permitido: .' . $extension);
                    }

                    // Verificar doble extensión (archivo.php.jpg)
                    $originalName = $file->getClientOriginalName();
                    foreach ($this->blockedExtensions as $ext) {
                        if (str_contains(strtolower($originalName), '.' . $ext . '.')) {
                            abort(422, 'Nombre de archivo sospechoso detectado.');
                        }
                    }

                    // Verificar que el MIME real coincida con la extensión
                    $realMime = $file->getMimeType();
                    if (str_starts_with($realMime, 'application/x-php') ||
                        str_starts_with($realMime, 'application/x-httpd-php') ||
                        str_starts_with($realMime, 'text/x-php')) {
                        abort(422, 'Archivo PHP detectado y bloqueado.');
                    }
                }
            }
        }

        return $next($request);
    }
}
