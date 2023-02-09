<?php

namespace App\Http\Controllers;
use app\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function displayuserprofile()
    {
        $user = Auth::user();
        return view('dashboard.dpages.userprofile', ['name' => $user->name, 'email' => $user->email,'password' => $user->password]);
    }

    public function edituserprofile(Request $request)
{
    $user = Auth::user();

    $request->validate([
        'password' => 'required|confirmed',
    ]);

    $user->name = $request->input('name');
    $user->email = $request->input('email');
    if ($request->input('password')) {
        $user->password = Hash::make($request->input('password'));
    }
    $user->save();
    return redirect()->route('userprofile');
}
}


