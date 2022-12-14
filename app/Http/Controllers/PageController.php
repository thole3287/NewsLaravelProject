<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\LoaiTin;
use Illuminate\Http\Request;
use App\Models\TheLoai;
use App\Models\TinTuc;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    //
    
    public function getTrangChu()
    {
        // $data = TheLoai::all();
        // dd($data[0]->TinTuc);
        return view("FrontEnd.Pages.trangchu");
    }
    public function getLienHe()
    {
        return view("FrontEnd.Pages.lienhe");//liên hệ
    }
    public function getLoaiTin($id)
    {
        $loaiTin = LoaiTin::find($id);
        $tinTuc = TinTuc::where("idLoaiTin", $id)->paginate(5);
        return view("FrontEnd.Pages.loaitin", compact("loaiTin", "tinTuc"));
    }
    public function getTinTuc($id)
    {
        $tinTuc= TinTuc::find($id);
        $tinNoiBac = TinTuc::where("NoiBat", 1)->take(4)->get();
        $tinLienQuan = TinTuc::where("idLoaiTin", $tinTuc->idLoaiTin)->take(4)->get();
        return view("FrontEnd.Pages.tintuc", compact("tinNoiBac", "tinTuc", "tinLienQuan"));
    }
    public function getDangNhap()
    {
        return view("FrontEnd.Pages.dangnhap");
    }
    public function postDangNhap(Request $req)
    {
        
        $val = $req->validate([
            'email' =>'required',
            'password' => 'required|min:3|max:32'
        ],[
            'email.required'=> 'Vui lòng nhập email!',
            'password.required' => 'Vui lòng nhập mật khẩu!',
            'password.min' => 'Password không nhỏ hơn 3 kí tự!',
            'password.max' => 'Password không lớn hơn 32 kí tự!'
        ]);
        if(Auth::attempt(['email'=>$val['email'], 'password'=> $val['password']]))
        {
            return redirect("tintuc/trangchu");
        }else
        {
            return back()->with("thongbao", "Đăng nhập thất bại");
        }
        
       
    }
    public function getDangXuat()
    {
        Auth::logout();
        return redirect('tintuc/trangchu');
    }
    public function postComment(Request $req, $id)
    {
        $val = $req->validate([
            'noidung' => 'required'
        ],[
            'noidung.required' => 'Vui lòng nhập bình luận!'
        ]);
        $idTinTuc = $id;
        $tinTuc = TinTuc::find($id);
        $comment = new Comment();
        $comment->idTinTuc = $id;
        $comment->idUser = Auth::user()->id;
        $comment->noidung = $val["noidung"];
        $comment->save();
        return redirect()->route('tintuc', [$id, $tinTuc->TieuDeKhongDau]);

    }
    function getNguoiDung()
    {
        $user = Auth::user();
        return view("FrontEnd.Pages.nguoidung", compact("user"));
    }
    function postNguoiDung(Request $req)
    {
        $val = $req->validate([
            'name' => 'required|min:3'
            ],[
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'name.min' => 'Tên người dùng tối thiểu 3 ký tự'
        ]);
        $user = new User();
        $user->name = $val["name"];
        if ($req->changepassword=="on")
        {
            $val = $req->validate([
                'password' => 'required|min:3|max:32',
                'passwordAgain' =>'required|same:password'
            ],[
                'password.required' => 'Bạn chưa nhập mật khẩu',
                'password.min' => 'Mật khẩu phải ít nhất 3 ký tự',
                'password.max' => 'Mật khảu tối đa 32 ký tự',
                'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
                'passwordAgain.same' => 'Mật khẩu không khớp'
            ]);
            $user->password = bcrypt($val["password"]);
        }
        // $user->save();
        $user->save();
        return back()->with("thongbao","Bạn đã cập nhật thành công");
    }

    public function getDangKy(){
        return view("FrontEnd.Pages.dangky");
    }
    public function postDangKy(Request $req){
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
        return redirect()->route('dangky')->with('thongbao', 'Chúc mừng bạn đã đăng ký thành công');
    }
    public function getGioiThieu(){
        return view("FrontEnd.Pages.gioithieu");
    }

    function postTimKiem(Request $req)
    {
        $tukhoa = $req->tukhoa;
        $tintuc = TinTuc::where('TieuDe', 'like', "%$tukhoa%")
                        ->orWhere("TomTat", "like", "%$tukhoa%")
                        ->orWhere("NoiDung", "like", "%$tukhoa%")->take("30")->paginate(5);

        return view("FrontEnd.Pages.timkiem",compact("tintuc", "tukhoa"));
    }
    
}