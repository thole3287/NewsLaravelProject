<?php

namespace App\Http\Controllers;

use App\Models\TinTuc;
use App\Models\LoaiTin;
use App\Models\TheLoai;
use Illuminate\Support\Str;


use Illuminate\Http\Request;

class TintucController extends Controller
{
    //
    public function getDanhSachTinTuc()
    {
        $tintuc = TinTuc::orderBy("id", "DESC")->paginate(10);
        return view("admin.tintuc.danhsach", compact("tintuc"));
    }
    public function getThemTinTuc()
    {
        $loaitin = LoaiTin::all();
        $theloai = TheLoai::all();
        return view("admin.tintuc.them", compact("loaitin", "theloai"));
    }
    public function postThemTinTuc(Request $req)
    {
        $val = $req->validate([
            "loaitin" => "required",
            "tieude" => "required|min:3|unique:tintuc,TieuDe",
            "tomtat" => "required",
            "noidung" => "required",
            "noibat" => "required"
            ],[
            "loaitin.required" => "Bạn chưa chọn loại tin",
            "tieude.required" => "Bạn chưa nhập tiêu",
            "tieude.min" => "Tiêu đề ít nhất 3 ký tự",
            "tieude.unique" => "Tiêu đề đã tồn tại",
            "tomtat.required" => "Bạn chưa nhập tóm tắt",
            "noidung.required" => "Bạn chưa nhập nội dung",
            "noibat.required" => "Bạn chưa nhập nổi bật"
        ]);
        $tt = new TinTuc();
        $tt->TieuDe = $val["tieude"];
        $tt->TieuDeKhongDau = changeTitle($val["tieude"]);
        $tt->idLoaiTin = $val["loaitin"];
        $tt->TomTat = $val["tomtat"];
        $tt->NoiDung = $val["noidung"];
        $tt->SoLuotXem = 0;
        $tt->NoiBat = $val["noibat"];
        if ($req->hasFile("hinh"))
        {
            $file = $req->file("hinh");
            $ext = $file->getClientOriginalExtension();
        if ($ext != "jpg" && $ext != "png" && $ext != "jpeg")
        {
            return redirect("tintuc/admin/tintuc/them")->with("loi", "Bạn chỉ được chọn file hình có: .jpg, .png, .jpeg");

        }
        $ten = $file->getClientOriginalName();
        $name = Str::random(4);
        $name = $name."_".$ten;
        while(file_exists("resources/images/tintuc".$name))
        {
            $name = Str::random(4);
            $name = $name."_".$ten;
        }
            $file->move("resources/images/tintuc", $name);
            $tt->Hinh = $name;
        }
        else
        {
            $tt->Hinh = "";
        }
        $tt->save();
            return redirect("tintuc/admin/tintuc/them")->with("thongbao", "Thêm tin tức thành công");
    }
    
    public function getLoaiTin($idtl)
    {
        $loaitin = LoaiTin::where("idTheLoai", $idtl)->get();
        foreach($loaitin as $lt)
        {
            echo "<option value='".$lt->id."'>".$lt->Ten."</option>";
        }
    }
    public function getSuaTinTuc($id)
    {
        $loaitin = LoaiTin::all();
        $theloai = TheLoai::all();
        $tintuc = TinTuc::find($id);
        return view("admin.tintuc.sua", compact("loaitin", "theloai", "tintuc"));
    }
    public function postSuaTinTuc(Request $req, $id)
    {
        $val = $req->validate([
            "loaitin" => "required",
            "tieude" => "required|min:3",
            "tomtat" => "required",
            "noidung" => "required"
        ],[
            "loaitin.required" => "Bạn chưa chọn loại tin",
            "tieude.required" => "Bạn chưa nhập tiêu",

            "tieude.min" => "Tiêu đề ít nhất 3 ký tự",
            "tieude.unique" => "Tiêu đề đã tồn tại",
            "tomtat.required" => "Bạn chưa nhập tóm tắt",
            "noidung.required" => "Bạn chưa nhập nội dung"
        ]);
        $tt = TinTuc::find($id);
        $tt->TieuDe = $val["tieude"];
        $tt->TieuDeKhongDau = changeTitle($val["tieude"]);
        $tt->idLoaiTin = $val["loaitin"];
        $tt->TomTat = $val["tomtat"];
        $tt->NoiDung = $val["noidung"];
        $tt->SoLuotXem = 0;
        if ($req->hasFile("hinh"))
        {
            $file = $req->file("hinh");
            $ext = $file->getClientOriginalExtension();
        if ($ext != "jpg" && $ext != "png" && $ext != "jpeg")
        {
            return redirect("tintuc/admin/tintuc/them")->with("loi", "Bạn chỉ được chọn file hình có: .jpg, .png, .jpeg");

        }
        $ten = $file->getClientOriginalName();
        $name = Str::random(4);
        $name = $name."_".$ten;
        while(file_exists("resources/images/tintuc".$name))
        {
            $name = Str::random(4);
            $name = $name."_".$ten;
        }
            $file->move("resources/images/tintuc", $name);
            $tt->Hinh = $name;
        }
        else
        {
            $tt->Hinh = "";
        }
            $tt->save();
            return redirect("tintuc/admin/tintuc/sua/".$id)->with("thongbao", "Sửa tin tức thành công");
    }
    public function getXoaTinTuc($id)
    {
        $tt = TinTuc::find($id);
        $tt->delete();
        return redirect("tintuc/admin/tintuc/danhsach")->with("thongbao", "Xoá tin tức thành công");
    }
}
