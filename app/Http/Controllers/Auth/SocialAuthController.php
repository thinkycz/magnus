<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        try {
            $socialUser = Socialite::driver('facebook')->user();
        } catch (\Exception $e) {
            return redirect()->route('landing')->with('message', 'Đăng nhập không thành công');
        }

        if (! ($user = User::where('email', $socialUser->getEmail())->first())) {
            $user = User::create([
                'name'              => $socialUser->getName(),
                'email'             => $socialUser->getEmail(),
                'password'          => bcrypt(uniqid()),
                'email_verified_at' => now(),
                'auth_type'         => 'facebook'
            ]);
        } elseif ($user->auth_type != 'facebook') {
            return redirect()->back()->with('message', 'Bạn đã có tài khoản dùng Email này. Vui lòng đăng nhập bằng mật khẩu.');
        }

        auth()->login($user, true);

        return redirect()->route('dashboard')->with('success', "Magnus chào bạn :)");
    }
}
