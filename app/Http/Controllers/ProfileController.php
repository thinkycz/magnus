<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        return view('profile', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => 'required',
            'phone' => ['required', 'digits:9', Rule::unique('users')->ignoreModel($user)],
            'email' => ['email', Rule::unique('users')->ignoreModel($user)]
        ]);

        $user->update($data);

        return redirect()->route('profile.index');
    }
}
