<?php

namespace App\Actions\Auth\AuthSession;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class StoreAuthenticatedSessionAction
{
    public function handle(Request $request): Void
    {   
        $request->authenticate();

        $request->session()->regenerate();
    }
}