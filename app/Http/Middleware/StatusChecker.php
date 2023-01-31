<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class StatusChecker
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
        if (\Auth::user()->status == 'active') {
            if (tr_group_permission_check(tr_user_details(\Auth::user()->id, 'group_id'), 'login_access')) {
                return $next($request);
            } else {
                if (tr_user_permission_check(null, 'login_access')) {
                    return $next($request);
                } else {
                    \Auth::logout();
                    return redirect()->route('auth.login')->withErrors(['error, Giriş yapma yetkiniz bulunmuyor. Lütfen yöneticinize başvurunuz.']);
                }
            }
        } else {
            if (tr_user_permission_check(null, 'login_access')) {
                return $next($request);
            } else {
                \Auth::logout();
                return redirect()->route('auth.login')->withErrors(['error, Üyeliğiniz henüz aktif değil. Lütfen yöneticinize başvurunuz.']);
            }
        }
    }
}
