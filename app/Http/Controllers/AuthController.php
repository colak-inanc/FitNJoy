<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerP(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->telefonNo = $request->telefonNo;
        $user->birthday = $request->birthday;
        $user->gender = $request->gender;
        $user->role = $request->role ?? 1;
        $user->save();

        return redirect()->route("login")->withErrors("Kullanıcı kaydı başarılı");
    }

    public function loginP(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();

            if ($user->role == 0) {
                return redirect()->route('adminPanel.home');
            } else {
                return redirect()->route('userPanel.home');
            }
        } else {
            return redirect()->route("login")->withErrors('Kullanıcı hatası!');
        }
    }


}
