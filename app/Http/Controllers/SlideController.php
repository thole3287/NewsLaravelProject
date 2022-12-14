<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    //
    public function getDanhSachSlide()
    {
        $slide = Slide::orderBy("id", "DESC")->paginate(10);
        return view("admin.slide.danhsach", compact("slide"));
    }
    public function getXoaSlide($id)
    {
        $user = Slide::find($id);
        $user->delete();
        return redirect("tintuc/admin/slide/slide")->with("thongbao", "Xoá slide thành công");
    }
    public function getThemSlide()
    {
    return view("admin.slide.them");
    }
    public function postThemSlide(Request $req)
    {
        $val = $req->validate([
            "ten" => 'required',
            "hinh" => 'required',
            'noidung'=> 'required',
            'link' =>'required'
            ],[
            "ten.required" => "Bạn chưa nhập tên",
            'hinh.required'=>'Bạn chưa nhập hình',
            'noidung.required'=> 'Bạn chưa nhập nội dung',
            'link.required'=>'Bạn chưa nhập link'
        ]);
        $slide = new Slide();
        $slide->Ten = $val["ten"];
        $slide->Hinh = $val["hinh"];
        $slide->NoiDung= $val["noidung"];
        $slide->Link= $val["link"];
        $slide->save();
        return redirect("tintuc/admin/slide/them")->with("thongbao", "Thêm mới thàng công");
    }
    public function getSuaSlide($id)
    {
        $slide = Slide::find($id);
        return view("admin.slide.sua", compact("slide"));
    }
    public function postSuaSlide(Request $req, $id)
    {
        $val = $req->validate([
            "ten" => 'required',
            "hinh" => 'required',
            'noidung'=> 'required',
            'link' =>'required'
            ],[
            "ten.required" => "Bạn chưa nhập tên",
            'hinh.required'=>'Bạn chưa nhập hình',
            'noidung.required'=> 'Bạn chưa nhập nội dung',
            'link.required'=>'Bạn chưa nhập link'
        ]);
        $slide = Slide::find($id);
        $slide->Ten = $val["ten"];
        $slide->Hinh = $val["hinh"];
        $slide->NoiDung= $val["noidung"];
        $slide->Link= $val["link"];
        $slide->save();
        return redirect("tintuc/admin/slide/sua/".$id)->with("thongbao","Sửa thành công");
    }
}
