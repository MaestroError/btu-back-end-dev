<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function loginPage(Request $request) {
        return view('auth.login');
    }
    public function login(Request $request) {
        $creds = $request->validate([
            "email" => "required|email",
            "password" => "required",
        ]);
        $user = User::where(['email' => $creds['email']])->first();
        if($user) {
            if(Hash::check($creds['password'], $user->password)) {
                Auth::login($user);
                return redirect(route("user.index"));
            } else {
                return back()->withError(["password" => "Incorrect password"]);
            }
        }

        return back()->withError(["email" => "Invalid Email address"]);
    }
    public function registerPage(Request $request) {
        return view('auth.register');
    }
    public function register(Request $request) {
        $creds = $request->validate([
            "email" => "required|email",
            "name" => "required",
            "password" => "required|confirmed",
        ]);

        $creds['password'] = Hash::make($creds['password']);
        User::create($creds);
        return redirect(route('login'));
    }
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        return redirect("/");
    }
}
