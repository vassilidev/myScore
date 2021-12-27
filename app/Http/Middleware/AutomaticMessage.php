<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\ViewErrorBag;

class AutomaticMessage
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $errors = session()->get('errors', app(ViewErrorBag::class));

        foreach (['success', 'error', 'info'] as $state) {
            if (session($state)) {
                toast(session($state), $state);
            }
        }

        if (session('status') == 'verification-link-sent') {
            toast(__('A new email verification link has been emailed to you!'), 'info');
        }

        if ($errors->any()) {
            toast($errors->first(), 'error');
        }

        return $next($request);
    }
}
