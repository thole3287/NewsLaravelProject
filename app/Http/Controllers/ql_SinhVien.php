<?php

namespace App\Http\Controllers;

use App\Models\khoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\lophoc;
use App\Models\monhoc;

class ql_SinhVien extends Controller
{
    //
    public function getDSMonHoc(){

        $dsMonHoc = DB::table('monhoc')->get();
        return view('buoi5.danhsachmonhoc', compact('dsMonHoc'));

    }
    
    public function getThemMonHoc(){
        return view('buoi5.themmonhoc');
    }

    public function postThemMonHoc(Request $req){
        
        $validatedata =$req->validate([
            'tenmonhoc' => 'required',
            'sotinchi' => 'required|numeric'
        ],[
            'tenmonhoc.required' => "Vui lòng nhập tên môn học!",
            'sotinchi.required' => "Vui lòng nhập số tín chỉ!",
            'sotinchi.numeric' => "Vui lòng nhập số tín chỉ là con số!"
        ]);
        $tenmonhoc = $validatedata['tenmonhoc'];
        $sotinchi = $validatedata['sotinchi'];

        DB::table('monhoc')->insert(['tenmonhoc' => $req->tenmonhoc, 'sotinchi' => $req->sotinchi, 'thaotac'=>""]);
        return redirect('buoi5/dsmonhoc');
    }
    public function getXoaMonHoc($mamh){
        DB::table('monhoc')->where('id', '=', $mamh)->delete();
        return redirect('buoi5/dsmonhoc');
    }
    public function getSuaMonHoc($mamh){
        $mh = DB::table('monhoc')->where('id', '=', $mamh)->get();
        return view('buoi5.suamonhoc', compact('mh'));
    }

    public function postSuaMonHoc(Request $req, $mamh){
        $validatedata =$req->validate([
            'tenmonhoc' => 'required',
            'sotinchi' => 'required|numeric'
        ],[
            'tenmonhoc.required' => "Vui lòng nhập tên môn học!",
            'sotinchi.required' => "Vui lòng nhập số tín chỉ!",
            'sotinchi.numeric' => "Vui lòng nhập số tín chỉ là con số!"
        ]);
        $tenmonhoc = $validatedata['tenmonhoc'];
        $sotinchi = $validatedata['sotinchi'];
        
        DB::table('monhoc')->where('id', '=', $mamh)->update(['tenmonhoc'=> $req->tenmonhoc, 'sotinchi'=>$req->sotinchi]);
        return redirect('buoi5/dsmonhoc');
    }
    public function getMonHoc(){
        $dslop = lophoc::join("sinhvien", "sinhvien.malop", "lophoc.malop")->get();
        dd($dslop);

    }
    // public function getKhoa(){
    //     $dslop = lophoc::join("khoa", "khoa.makhoa", "lophoc.makhoa")->get();
    //     dd($dslop);

    // }
    public function getDanhSachMonHoc(){
        $dsmonhoc = monhoc::all();
        return view("buoi6.monhoc", compact("dsmonhoc"));
    }

    public function get_ThemMonHoc(){
        return view('buoi5.themmonhoc');
    }

    public function post_ThemMonHoc(Request $req){
        
        $validatedata =$req->validate([
            'tenmonhoc' => 'required',
            'sotinchi' => 'required|numeric'
        ],[
            'tenmonhoc.required' => "Vui lòng nhập tên môn học!",
            'sotinchi.required' => "Vui lòng nhập số tín chỉ!",
            'sotinchi.numeric' => "Vui lòng nhập số tín chỉ là con số!"
        ]);
        $monhoc= new monhoc();
        $monhoc->tenmonhoc = $validatedata['tenmonhoc'];
        $monhoc->sotinchi = $validatedata['sotinchi'];
        $monhoc->save();

        return redirect('buoi6/danhsachmonhoc');
    }
    public function get_XoaMonHoc($mamh){
        $monhoc = monhoc::find($mamh);
        $monhoc->delete();
        return redirect('buoi6/danhsachmonhoc')->with("thongbao", "Đã xóa môn học thành công!");
    }
    public function get_SuaMonHoc($mamh){
        $monhoc = monhoc::find($mamh);
        return view('buoi6.suamonhoc', compact('monhoc'));
    }

    public function post_SuaMonHoc(Request $req, $mamh){
        $validatedata =$req->validate([
            'tenmonhoc' => 'required',
            'sotinchi' => 'required|numeric'
        ],[
            'tenmonhoc.required' => "Vui lòng nhập tên môn học!",
            'sotinchi.required' => "Vui lòng nhập số tín chỉ!",
            'sotinchi.numeric' => "Vui lòng nhập số tín chỉ là con số!"
        ]);
        $monhoc=  monhoc::find($mamh);
        $monhoc->tenmonhoc = $validatedata['tenmonhoc'];
        $monhoc->sotinchi = $validatedata['sotinchi'];
        $monhoc->save();
        return  redirect('buoi6/danhsachmonhoc');
    }
    public function getDanhSachKhoa(){
        $dskhoa = khoa::all();
        return view("buoi6.danhsachkhoa", compact("dskhoa"));
    }
    public function get_XoaKhoa($makhoa){
        $khoa = khoa::find($makhoa);
        $khoa->delete();
        return redirect('buoi6.danhsachkhoa')->with("thongbao", "Đã xóa môn học thành công!");
    }
    ////
    public function get_ThemKhoa(){
        return view('buoi6.themkhoa');
    }
    public function post_ThemKhoa(Request $req){
        
        $validatedata =$req->validate([
            'tenkhoa' => 'required'
        ],[
            'tenkhoa.required' => "Vui lòng nhập tên khoa!",
        ]);
        $khoa= new khoa();
        $khoa->tenkhoa = $validatedata['tenkhoa'];
        $khoa->save();
        return redirect('buoi6/danhsachkhoa');
    }
    public function get_SuaKhoa($makhoa){
        $khoa = khoa::find($makhoa);
        return view('buoi6.suakhoa', compact('khoa'));
    }
    
}