<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        // return view('auth.register');
        return view('frontend.index');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
            $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['nullable', 'string', 'max:255'],
            'password' => ['required', 'string', 'confirmed', 'min:8'],
            'phone_number' => ['nullable', 'string', 'max:255'],
            'role' => ['required', 'in:user,agent'],
            'gender' => ['required', 'string', 'max:255'],
            // 'remember' => ['required', 'accepted'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'role' => $request->role,
            'gender' => $request->gender,
        ]);

        $notification = [
            'message' => 'Account Created Successfully',
            'alert-type' => 'success'
        ];
        return redirect()->route('login')->with($notification);

        // Process any additional logic or send notifications if needed
        // return redirect()->route('login'); // Replace 'home' with your desired redirect route

    }
}
