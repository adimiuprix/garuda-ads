<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class JoinMemberController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('post')) {
            $validated = $request->validate([
                'fullname' => 'required|string|max:255',
                'username'  => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|confirmed',
                'phone' => ['required', 'digits_between:9,20'],
            ]);

            User::create([
                'fullname' => $validated['fullname'],
                'username' => $validated['username'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'phone' => $validated['phone'],
                'is_active' => false,
                'plan_id' => 1,
            ]);

            return redirect()->route('signin')->with('success', 'Pendaftaran berhasil');
        }

        return view('authorize.registration', [
            'title' => 'Form Pendaftaran Member',
        ]);
    }
}
