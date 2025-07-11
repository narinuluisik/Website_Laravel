<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class AdminAuthController extends Controller
{
    
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username'=> 'required',
            'password'=>'required'
        ]);
        $admin =Admin ::where('username',$request->username)->first();

        if($admin && Hash::check($request->password,$admin->password)){
            Session::put('admin_logged_in',true);
            return redirect()->route('admin.dashboard');
        }
        return back()->withErrors(['login'=>'Geçersiz kullanıcı adı veya şifre']);
    }

    public function logout()
    {
        Session::forget('admin_logged_in');
        return redirect()->route('admin.login');
    }
}
