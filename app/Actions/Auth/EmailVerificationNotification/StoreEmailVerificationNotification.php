<?php

namespace App\Actions\Auth\EmailVerificationNotification;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

class StoreEmailVerificationNotification
{
    public function handle(Request $request)
    {   
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        $request->user()->sendEmailVerificationNotification();

    }
}