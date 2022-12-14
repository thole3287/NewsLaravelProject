<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function getDanhSachUser()
    {
        $user = User::orderBy("id", "DESC")->paginate(10);
        return view("admin.user.danhsach", compact("user"));
    }
    public function getThemUser()
    {
        return view("admin.user.them");
    }
    public function postThemUser(Request $req){
        $validate = $req->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password'=>'required|min:3|max:32',
            'passwordAgain' => 'required|same:password'
        ], [
            'name.required' =>'bạn chưa nhập tên người dùng',
            'name.min' => 'tên người dùng tối thiểu 3 kí tự',
            'email.required'=>'Bạn chưa nhập email',
            'email.email'=>'Bạn chưa nhập đúng định dạng Email',
            'email.unique'=>'Email này đã tồn tại trên hệ thống',
            'password.required'=>'bạn chưa nhập mật khẩu',
            'password.min'=>'Mật khẩu ít nhất 3 ký tự',
            'password.max'=>'Mạt khẩu tối đa 32 ký tự',
            'passwordAgain'=>'Bạn chưa nhập lại mật khẩu',
            'passwordAgain.same'=>'Mật khẩu nhập lại không khớp'
        ]);
        $user = new User();
        $user->name = $validate['name'];
        $user->email = $validate['email'];
        $user->password = bcrypt($validate['password']);
        $user->save();
        return redirect("tintuc/admin/user/them")->with("thongbao", "Chúc mừng bạn đã thêm mới thành công");
        //return redirect()->route('dangky')->with('thongbao', 'Chúc mừng bạn đã đăng ký thành công');
    }
    public function getSuaUser($id)
    {
        $user = User::find($id);
        return view("admin.user.sua", compact("user"));
    }
    public function postSuaUser(Request $req, $id)
    {
        $val = $req->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password'=>'required|min:3|max:32',
            'passwordAgain' => 'required|same:password'
        ], [
            'name.required' =>'bạn chưa nhập tên người dùng',
            'name.min' => 'tên người dùng tối thiểu 3 kí tự',
            'email.required'=>'Bạn chưa nhập email',
            'email.email'=>'Bạn chưa nhập đúng định dạng Email',
            'password.required'=>'bạn chưa nhập mật khẩu',
            'password.min'=>'Mật khẩu ít nhất 3 ký tự',
            'password.max'=>'Mạt khẩu tối đa 32 ký tự',
            'passwordAgain'=>'Bạn chưa nhập lại mật khẩu',
            'passwordAgain.same'=>'Mật khẩu nhập lại không khớp'
        ]);
        $user = User::find($id);
        $user->name = $val['name'];
        $user->email = $val['email'];
        $user->password = bcrypt($val['password']);
        $user->save();
        return redirect("tintuc/admin/user/sua/".$id)->with("thongbao","Sửa thành công");
    }
    public function getXoaUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect("tintuc/admin/user/user")->with("thongbao", "Xoá user thành công");
    }
}
