<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->isMethod('post')) {
            // Proses data form
            $validated = $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);

            if (Auth::attempt($validated)) {
                $request->session()->put('email', $validated['email']);
                return redirect()->intended('dashboard');
            }

            return back()->withErrors([
                'email' => 'Email atau password salah.',
            ])->withInput();
        }
        return view('authorize.signin', [
            'title' => 'Form Sign In Member',
        ]);
    }

    public function signout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/signin');
    }
}
