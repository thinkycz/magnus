<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SecurityController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        return view('security', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'password' => 'required|min:8|confirmed',
        ]);

        $user->update([
            'password' => bcrypt($data['password'])
        ]);

        return redirect()->route('security.index')->with('success', 'Đã thay đổi mật khẩu');
    }
}
