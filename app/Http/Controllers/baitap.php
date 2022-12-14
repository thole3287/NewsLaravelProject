<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class baitap extends Controller
{
    public function XemThoMe()
    {
        $hoten = "Giang Hào Côn";
        $tuoi = 60;
        return view("thome",compact("hoten","tuoi"));
    }
    //ví dụ form request 01
    public function XulyForm(Request $req)
    {
        $hoten=""; $tuoi="";
        if (isset($req->dangky))
        {
            $hoten = $req->hoten;
            $tuoi = $req->tuoi;
        }
        return view("vidu_formrequest", compact("hoten","tuoi"));
    }
    //ví dụ form request 02
    public function getForm()
    {
        $hoten=""; $tuoi="";
        return view("vidu_form", compact("hoten", "tuoi"));
    }
    public function postForm(Request $req)
    {
        $hoten = $req->hoten;
        $tuoi = $req->tuoi;
        return view("vidu_form", compact("hoten", "tuoi"));
    }
    public function getHinhChuNhat(){
        $cd =""; $cr ="";
        return view("buoi2.hinhchunhat", compact("cd", "cr"));
    }
    public function postHinhChuNhat(Request $req)
    {
        
        $validatedata =$req->validate([
            'cd' => 'required|numeric',
            'cr' => 'required|numeric'
        ],[
            'cd.required' => "Vui lòng nhập chiều dài!",
            'cd.numeric' => "Vui lòng nhập chiều dài là số!",
            'cr.required' => "Vui lòng nhập chiều rộng!",
            'cr.numeric' => "Vui lòng nhập chiều rộng là con số!"
        ]);
        $cd= $validatedata["cd"];
        $cr = $validatedata["cr"];
        $dt = $cd * $cr;
        $cv = 2*($cd+ $cr);
        
        return view("buoi2.hinhchunhat", compact("cd", "cr", "cv", "dt"));
    }

    public function getTinhLuong()
    {
        $luongngay=""; $ngaycong="";
        return view("buoi2.tinhluong", compact("luongngay", "ngaycong"));
    }
    public function postTinhLuong(Request $req)
    {
        $validatedata =$req->validate([
            'luongngay' => 'required|numeric',
            'ngaycong' => 'required|numeric'
        ],[
            'luongngay.required' => "Vui lòng nhập chiều dài!",
            'luongngay.numeric' => "Vui lòng nhập chiều dài là số!",
            'ngaycong.required' => "Vui lòng nhập chiều rộng!",
            'ngaycong.numeric' => "Vui lòng nhập chiều rộng là con số!"
        ]);
        $luongngay = $validatedata["luongngay"];
        $ngaycong = $validatedata["ngaycong"];
        
        $ketqua = "Lương tháng : " . number_format($luongngay * $ngaycong);
        // $luongngay = $req->luongngay;
        // $ngaycong = $req->ngaycong;
        // $ketqua="";
        // if (is_numeric($luongngay) && is_numeric($ngaycong))
        // {
        //     $ketqua = "Lương tháng : " . number_format($luongngay * $ngaycong);
        // }
        // else
        // {
        //     $ketqua = "Bạn chưa nhập dữ liệu tính lương";
        // }
        return view("buoi2.tinhluong", compact("luongngay", "ngaycong", "ketqua"));
    }
    public function getPhuongTrinh()
    {
        $a =""; $b="";  $ketqua="";
        if (isset($_GET["a"]))
        {
            $a = $_GET["a"];
            $b = $_GET["b"];
            if($a==0)
            {
                $ketqua = "Số a phải nhập khác 0";
            }else if ($a=='')
            {
                $ketqua = "Số a không được trống";
            }else if($b=='')
            {
                $ketqua = "Số b không được trống";
            }else
            {
                $ketqua = -($b)/$a;
            }
        }
        return view("buoi2.phuongtrinh", compact("a", "b", "ketqua"));
    }
    // public function getDienTichVaChuVi(){
    //     $r=""; $pi=3.14; 
    //     return view("dientichvachuvi", compact("r", "pi"));
    // }
    // public function postDienTichVaChuVi(Request $req)
    // {

    //     $r = $req->r;
    //     if(isset($_GET["bankinh"]))
    //     {
    //         $r= 
    //     }
    //     $pi=3.14;
    //     $dientich="";
    //     $chuvi="";
    //     if (is_numeric($r))
    //     {
    //         $chuvi = 2*$pi*$r;
    //         $dientich = $pi*$r*$r;
    //     }
    //     else
    //     {
    //         $ketqua = "Bạn chưa nhập dữ liệu tính lương";
    //     }
    //     return view("buoi2.tinhluong", compact("r", "pi", "chuvi", "dientich"));
    // }
     public function getDienTichVaChuVi(){
        $r=""; $pi=3.14; $chuvi=""; $dientich="";
        if(isset($_GET["tinh"]))
        {
            $r= $_GET["bankinh"];
            if(is_numeric($r))
            {
                $chuvi= 2*$pi*$r;
                $dientich=$pi*$r*$r; 
            }
        }
        return view("buoi2.dientichvachuvi", compact("r", "pi", "chuvi","dientich"));
    }
    public function getThanhToanTienDien(){
        $ten =""; $chisocu=""; $chisomoi=""; $dongia=""; $tienthanhtoan="";
        if(isset($_GET["tinh"]))
        {
            $ten= $_GET["ten"];
            $chisocu= $_GET["chisocu"];
            $chisomoi = $_GET["chisomoi"];
            $dongia = $_GET["dongia"];
            if(is_numeric($chisocu) && is_numeric($chisomoi) && is_numeric($dongia))
            {
                $tienthanhtoan= ($chisomoi - $chisocu) * $dongia;
            }
        }
        return view("buoi2.thanhtoantiendien", compact("ten", "chisocu", "chisomoi", "dongia", "tienthanhtoan"));
    }
    public function getPhuongTrinhBacNhat(){
        $ketqua =""; $a=""; $b="";
        if(isset($_GET["tinh"]))
        {
            $a = $_GET["a"];
            $b = $_GET["b"];
            if(is_numeric($a)&& is_numeric($b))
            {
                if ($a == ""){
                    $ketqua = 'Bạn chua nhập số a';
                    }
                    else if ($b == ''){
                    $ketqua = 'Bạn chưa nhập số b';
                    }
                    else if ($a == 0){
                    $ketqua = 'Số a phải nhập khác 0';
                    }
                    else {
                    $ketqua = "x= ". -($b) / $a;
                    }
            }
        }
        return view("buoi2.phuongtrinhbacnhat", compact("ketqua", "a", "b"));
        
    }
    public function getDocTho(){
        return view("buoi3.trangchung");
    }
    public function getThoMe(){
        return view("buoi3.thome");
    }
    public function getNguNgon(){
        return view("buoi3.ngungon");
    }
    public function getBinhLuan(){
        return view("buoi3.BinhLuan");
    }

}
