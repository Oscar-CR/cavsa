<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     */
    public function store(Request $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedTechnicalNumber()) { // Cambia a tu lógica de verificación personalizada
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        $request->user()->sendTechnicalNumberVerificationNotification(); // Cambia a tu lógica de envío de notificación

        return back()->with('status', 'verification-link-sent');
    }
}
