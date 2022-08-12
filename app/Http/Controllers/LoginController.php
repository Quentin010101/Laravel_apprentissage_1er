<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function Authentificate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)):

            $request->session()->regenerate();

            return redirect()->intended('dashbord');

        endif;

        return back()->withErrors([
            'email' => 'The provided credentials do not match our record.'
        ])->onlyInput('email');
        
    }
}
