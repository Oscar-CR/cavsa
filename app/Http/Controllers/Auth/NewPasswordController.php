<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class NewPasswordController extends Controller
{
    // ...

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'token' => ['required'],
            'technical_number' => ['required'], // Asegúrate de tener la regla de validación adecuada para technical_number
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Realiza el restablecimiento de contraseña con el campo "technical_number"
        $status = Password::reset(
            $request->only('technical_number', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        // Redirecciona al usuario según el resultado del restablecimiento de contraseña
        return $status == Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withInput($request->only('technical_number'))
                ->withErrors(['technical_number' => __($status)]);
    }
}