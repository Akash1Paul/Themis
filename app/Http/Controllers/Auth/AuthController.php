<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Psy\CodeCleaner\FunctionContextPass;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('admin/posts');
        } else {
            return redirect()->back()->withErrors($credentials);
        }
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('admin/login');
    }


    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    public function callback($provider)
    {
    
    $socialite =  Socialite::driver($provider)->stateless()->user();
   //dd($socialite);
        $user = User::updateOrCreate([
            'google_id' => $socialite->id,
        ], [
            'name' => $socialite->name,
            'email' => $socialite->email,
            'google_token' => $socialite->token,
            'profile_pic' => $socialite->avatar,
            'email_verified_at' => now()
            // 'google_refresh_token' => $socialite->refreshToken,
        ]);
     
        Auth::login($user);
     
        return  redirect('user/home');
    }
    public function userlogout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect("user/login");
    }
}
