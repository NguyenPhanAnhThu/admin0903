<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function getLogin(){
        return view('pages.login');
    }
    function getRegister(){
        return view('pages.register');
    }
    function postRegister(Request $req){
        $validator = \Validator::make($req->all(), [
            'username' => 'required|unique:users|max:50|min:10',
            'email' => 'required|unique:users|email',
            'gender' => "required",
            'password'=>'required|min:6',
            'confirm_password' => 'same:password'
        ],[
            'username.unique' => "Username đã có người sử dụng",
            'email.email' => "Email ko đúng định dạng",
            'confirm_password.same' => 'Mật khẩu không giống nhau'
        ]);

        if ($validator->fails()) {
            return redirect()->route('get-register')
                        ->withErrors($validator)
                        ->withInput();
        }
        dd($req->all());
    }
}
