<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
   public function dashboardLogin(Request $request)
   {
       $credentials = $request->validate([
           'email' => [ 'required', 'email' , 'max:255','exists:admins'],
           'password' => [ 'required', 'min:8'],
       ]);

       if( auth('admins')->attempt($credentials) )
       {
           return redirect('/dashboard');
       }

       throw ValidationException::withMessages(['password' => 'invalid password']);
   }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('admins.login-form');
    }







}
