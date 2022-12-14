<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function getLogin()
    {
        return view("admin.login");
    }
    public function postLogin(request $req)
    {
        $val = $req->validate([
            "email" => "required",
            "password" => "required|min:3|max:32"
            ],[
            'email.required' => "Bạn chưa nhập Email",
            "password.required" => "Bạn chưa nhập mật khẩu",
            "password.min" => "Mật khẩu không được ít hơn 3 ký tự",
            "password.max" => "Mật khẩu không nhiều hơn 32 ký tự"
        ]);
        if (Auth::attempt(['email' => $val["email"], "password" => $val["password"]]))
        {
            return redirect("tintuc/admin/theloai/danhsach");
        }
        else
        {
            return redirect("login")->with("thongbao", "Đăng nhập không thành công");
        }
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect("login");
    }
    public function getProfileUser()
    {
        $user = Auth::user();
        return view("admin.user.profile",compact("user"));
    }
}