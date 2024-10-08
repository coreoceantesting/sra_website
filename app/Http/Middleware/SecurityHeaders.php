<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityHeaders
{
    private $unwantedHeaders = ['X-Powered-By', 'server', 'Server'];

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Set security headers
        $response->headers->set('X-XSS-Protection', '1; mode=block');
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('X-Frame-Options', 'DENY');
        $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains; preload');
        $response->headers->set('Referrer-Policy', 'same-origin');
        $response->headers->set('Vary', 'Upgrade-Insecure-Requests');
        $response->headers->set('Upgrade-Insecure-Requests', '1');
        $response->headers->set('Content-Security-Policy', "default-src 'self' 'unsafe-inline' 'unsafe-eval' data: https:; img-src 'self' data: https:; font-src 'self' data: https:");
        $response->headers->set('Access-Control-Allow-Origin', 'SAMEORIGIN');
        $response->headers->set('Cross-Origin-Resource-Policy', 'SAMEORIGIN');
        $response->headers->set('Permissions-Policy', 'accelerometer=(), camera=(), geolocation=(), gyroscope=(), magnetometer=(), microphone=(), payment=(), usb=()');
        $response->headers->set('Access-Control-Allow-Methods', 'GET,POST');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type,Authorization,X-Requested-With,X-CSRF-Token');

        // Remove unwanted headers from the response
        $this->removeUnwantedHeaders($response);

        return $response;
    }

    private function removeUnwantedHeaders(Response $response): void
    {
        foreach ($this->unwantedHeaders as $header) {
            $response->headers->remove($header);
        }
    }
}
