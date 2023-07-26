<?php

namespace App\Http\Controllers\Auth;

// namespace App\Http\Controllers\Route2;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
use App\Models\Products;

class ForgotPassword extends Controller
{

    public function showForgotPasswordForm()
    {
        // $data = Products::all();

        return view('auth.forgot-password');
    }

    public function processForgotPassword(Request $request)
    {
        $request->validate([
            'old_password' => ['required', 'string', 'old_password'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = auth()->user();
        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect("dashboard")->withSuccess('Great! You have Successfully changed your password!!');
    }
}
