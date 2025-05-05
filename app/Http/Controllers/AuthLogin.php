<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Passenger;
use Illuminate\Support\Facades\Hash;

class AuthLogin extends Controller
{
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function showLoginForm(){
        return view('login');
    }
    
    public function Login(Request $request){
        $credentials = [
            'email_passeng' => $request->email,
            'password' => $request->password
        ];

        $credentials_admin = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::guard('admin')->attempt($credentials_admin)) {
            $user = Auth::guard('admin')->user();
            $request->session()->regenerate();
            session(['name' => $user->name]);
            session(['email' => $user->email]);
            session()->flash('login_success', true);
            return redirect()->intended('/dashboard');
        }
        if (Auth::guard('passenger')->attempt($credentials)) {
            $user = Auth::guard('passenger')->user();
            $request->session()->regenerate();
            session(['nom_passeng' => $user->nom_passeng]);
            session(['email_passeng' => $user->email_passeng]);
            session()->flash('login_success', true);
            return view('login');
        }
        return back()->withErrors([
            'login_error' => 'Les identifiants fournis ne correspondent pas à nos enregistrements.',
        ]);
    }
    public function register(Request $request){
        $validated = $request->validate([
            'nom_passeng' => 'required|string|max:255',
            'email_passeng' => 'required|email|unique:passenger,email_passeng',
            'password' => 'required|string|min:6|confirmed',
        ], [
            'nom_passeng.required' => 'Le nom est obligatoire.',
            'nom_passeng.string' => 'Le nom doit être une chaîne de caractères.',
            'nom_passeng.max' => 'Le nom ne doit pas dépasser 255 caractères.',
        
            'email_passeng.required' => 'L\'email est obligatoire.',
            'email_passeng.email' => 'L\'email doit être valide.',
            'email_passeng.unique' => 'Cet email est déjà utilisé.',
        
            'password.required' => 'Le mot de passe est obligatoire.',
            'password.min' => 'Le mot de passe doit contenir au moins 6 caractères.',
            'password.confirmed' => 'Les mots de passe ne correspondent pas.',
        ]);
        $passager = Passenger::create([
            'nom_passeng' => $request->nom_passeng,
            'email_passeng' => $request->email_passeng,
            'password' => Hash::make($request->password),
        ]);   
        session()->flash('register_success', true);
        Auth::guard('passenger')->login($passager);
        return redirect()->route('login');    
    }
}
