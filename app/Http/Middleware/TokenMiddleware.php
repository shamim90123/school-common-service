<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Services\ApiService;
use Illuminate\Support\Facades\Log;

class TokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // return $next($request);
        $apiService = new ApiService();
        $data = $apiService->authenticUser();
        Log::info($data);
        // if($apiService->authenticUser()) {
        //     return $next($request);
        // }
        return $next($request);
    }
}
