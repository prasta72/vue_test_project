<?php

namespace App\Actions\Auth\AuthSession;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class DeleteAuthenticatedSessionAction
{
    public function handle(Request $request): Void
    {   
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
    }
    
}