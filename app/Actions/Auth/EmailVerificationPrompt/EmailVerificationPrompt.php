<?php

namespace App\Actions\Auth\EmailVerificationPrompt;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

class EmailVerificationPrompt
{
    public function handle(Request $request)
    {   
        return $request->user()->hasVerifiedEmail()
        ? redirect()->intended(RouteServiceProvider::HOME)
        : view('auth.verify-email');

    }
}