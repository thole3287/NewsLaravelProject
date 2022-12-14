<?php

namespace App\Http\Controllers;
use App\Models\TheLoai;
use Illuminate\Http\Request;


class TheloaiController extends Controller
{
    //
    public function getDanhSachTheLoai()
        {
        $theloai = TheLoai::all();
        return view("admin.theloai.danhsach", compact("theloai"));
    }
    public function getThemTheLoai()
    {
    return view("admin.theloai.them");
    }
    public function postThemTheLoai(Request $req)
    {
        $val = $req->validate([
            "ten" => 'required|min:3|max:100|unique:TheLoai,Ten'
            ],[
            "ten.required" => "Bạn chưa nhập tên thể loại",
            "ten.min" => "Tên thể loại tối thiểu 3 ký tự",
            "ten.max" => "Tên thể loại tối đa 100 ký tự",
            "ten.unique" => "Tên thể đã có trong CSDL"
        ]);
        $theloai = new TheLoai();
        $theloai->Ten = $val["ten"];
        $theloai->TenKhongDau = changeTitle($val['ten']);
        $theloai->save();
        return redirect("tintuc/admin/theloai/danhsach")->with("thongbao", "Thêm mới thàng công");
    }
    public function getSuaTheLoai($id)
    {
        $theloai = TheLoai::find($id);
        return view("admin.theloai.sua", compact("theloai"));
    }
    public function postSuaTheLoai(Request $req, $id)
    {
        $val = $req->validate([
            "ten" => 'required|min:3|max:100|unique:TheLoai,Ten'
            ],[
            "ten.required" => "Bạn chưa nhập tên thể loại",
            "ten.min" => "Tên thể loại tối thiểu 3 ký tự",
            "ten.max" => "Tên thể loại tối đa 100 ký tự",
            "ten.unique" => "Tên thể đã có trong CSDL"
        ]);
        $theloai = TheLoai::find($id);
        $theloai->Ten = $val['ten'];
        $theloai->TenKhongDau = changeTitle($val['ten']);
        $theloai->save();
        return redirect("tintuc/admin/theloai/sua/".$id)->with("thongbao","Sửa thành công");
    }
    public function getXoaTheLoai($id)
    {
        $tl = TheLoai::find($id);
        $tl->delete();
        return redirect("tintuc/admin/theloai/danhsach")->with("thongbao", "Xoá thể loại thành công");
    }
}