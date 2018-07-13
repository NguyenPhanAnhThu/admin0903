<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

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
        $user = new User;
        $user->username = $req->username;
        $user->email = $req->email;
        $user->fullname = $req->fullname;
        $user->birthdate = date('Y-m-d',strtotime($req->birthdate));
        $user->gender = $req->gender;
        $user->address = $req->address;
        $user->phone = $req->phone;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect()->route('login')->with('success','Đăng kí thành công!');
    }

    function postLogin(Request $req){
        $data = [
            'email' => $req->email,
            'password' => $req->password
        ];
        if(Auth::attempt($data)){
            return redirect()->route('home');
        }
        return redirect()->back()->with('error',' Sai thông tin đăng nhập!');
    }
}
