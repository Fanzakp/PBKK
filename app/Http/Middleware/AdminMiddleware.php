<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        Log::info('AdminMiddleware running. User: ' . (Auth::check() ? Auth::id() : 'Not logged in'));
        
        /** @var User|null $user */
        $user = Auth::user();

        if (!$user || !$user->isAdmin()) {
            Log::info('User is not admin');
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}