<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

use Illuminate\Cache\RateLimiter;
// use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        // return view('auth.login');
        return view('frontend.index');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request, RateLimiter $limiter)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $notification = [
                'message' => 'Login Successful',
                'alert-type' => 'success'
            ];

            // Redirect users based on their role
            $user = Auth::user();
            $url = '';

            if ($user->role === 'admin') {
                $url = 'admin/dashboard';
            }
            elseif ($user->role === 'customer') {
                $url = '/customers/dashboard';
            }
            elseif ($user->role === 'agent') {
                $url = '/agent/dashboard';
            }

            return redirect()->intended($url)->with($notification);
        }

        if ($limiter->tooManyAttempts($this->getRateLimiterKey($request), 3)) {
            $retryAfter = $limiter->availableIn($this->getRateLimiterKey($request));

            $notification = [
                'message' => 'Too many login attempts. Please try again in ' . $retryAfter . ' seconds.',
                'alert-type' => 'error',
                'remainingSeconds' => $retryAfter
            ];

            return redirect()
                ->back()
                ->withInput($request->only('email'))
                ->withErrors($notification)
                ->with('disableSubmitButton', true);
        }

        $limiter->hit($this->getRateLimiterKey($request));

        $notification = [
            'message' => 'Wrong email or password',
            'alert-type' => 'error'
        ];

        return redirect()
            ->back()
            ->withInput($request->only('email'))
            ->withErrors($notification);
    }

    protected function getRateLimiterKey(Request $request)
    {
        return Str::lower($request->input('email')) . '|' . $request->ip();
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
