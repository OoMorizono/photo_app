<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class OAuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    public function oauthCallback()
    {
        try {
            $socialUser = Socialite::with('github')
            ->user();
        } catch (\Throwable $th) {
            return redirect('/login')->withErrors(
                ['oauth'=> '予期せぬエラーが発生しました'
                ]);
        }

        dd(Socialite::with('github')->user());
    }
}
