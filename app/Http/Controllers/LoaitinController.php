<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoaiTin;
use App\Models\TheLoai;

class LoaitinController extends Controller
{
    //
    public function getDanhSachLoaiTin()
    {
        $loaitin = LoaiTin::paginate(10);
        return view("admin.loaitin.danhsach", compact("loaitin"));
    }
    public function getXoaLoaiTin($id)
    {
        $tl = LoaiTin::find($id);
        $tl->delete();
        return redirect("tintuc/admin/loaitin/danhsach")->with("thongbao", "Xoá thể loại thành công");
    }
    public function getThemLoaiTin()
    {
        $theloai = TheLoai::all();
        return view("admin.loaitin.them", compact("theloai"));
    }

    public function postThemLoaiTin(Request $req)
    {
        $val = $req->validate([
            "ten" => 'required|min:3|max:100|unique:TheLoai,Ten',
            "theloai" => "required"
            ],[
            "ten.required" => "Bạn chưa nhập tên thể loại",
            "ten.min" => "Tên thể loại tối thiểu 3 ký tự",
            "ten.max" => "Tên thể loại tối đa 100 ký tự",
            "ten.unique" => "Tên thể đã có trong CSDL",
            "theloai.required" => "Bạn chưa chọn thể loại"
        ]);
        $loaitin = new LoaiTin();
        $loaitin->Ten = $val["ten"];
        $loaitin->TenKhongDau = changeTitle($val['ten']);
        $loaitin->idTheLoai = $val["theloai"];
        $loaitin->save();
        return redirect("tintuc/admin/loaitin/them")->with("thongbao", "Thêm mới thàng công");
    }
    public function getSuaLoaiTin($id)
    {
        $loaitin = LoaiTin::find($id);
        $theloai = TheLoai::all();
        return view("admin.loaitin.sua", compact("theloai","loaitin"));
    }
    public function postSuaLoaiTin(Request $req, $id)
    {
        $val = $req->validate([
            "ten" => 'required|min:3|max:100|unique:TheLoai,Ten',
            "theloai" => "required"
            ],[
            "ten.required" => "Bạn chưa nhập tên thể loại",
            "ten.min" => "Tên thể loại tối thiểu 3 ký tự",
            "ten.max" => "Tên thể loại tối đa 100 ký tự",
            "ten.unique" => "Tên thể đã có trong CSDL",
            "theloai.required" => "Bạn chưa chọn thể loại"
        ]);
        $loaitin = LoaiTin::find($id);
        $loaitin->Ten = $val['ten'];
        $loaitin->TenKhongDau = changeTitle($val['ten']);
        $loaitin->idTheLoai = $val["theloai"];
        $loaitin->save();
        return redirect("tintuc/admin/loaitin/danhsach")->with("thongbao","Sửa thành công");
    }
}
