<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Product;

class CheckStatusTrue
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $elements = Product::all();

        foreach ($elements as $element) {
            if ($element->status === 0) {
                return response()->json([
                    'message' => 'Exista elemente cu status diferit de true.',
                ], 400);
            }
        }
        return $next($request);
    }
}
