<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function loginForm()
    {
        return view('admin.admin_login');
    }

    public function login(login $request)
    {
        $remmber = $request->input('remmber') ? true : false;
        $email = $request->input('email');
        $password = $request->input('password');

        if(Auth::guard('admin')->attempt(['email' => $email, 'password' => $password], $remmber)){
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->back()->withInput()->with('error', __('messages.error_login'));
        }
    }
}
