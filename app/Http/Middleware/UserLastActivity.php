<?php

namespace App\Http\Middleware;

use App\Models\User;
use Auth;
use Cache;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class UserLastActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $expireTime = Carbon::now()->addMinute(1);
            Cache::put('is_online'.Auth::user()->id, true, $expireTime);
            User::where('id', Auth::user()->id)->update(['last_seen' => date('Y-m-d H:i:s')]);
        }
        return $next($request);
    }
}
