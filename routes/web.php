<?php

use App\Http\Controllers\AboutMe;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\baitap;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ql_SinhVien;
use App\Http\Controllers\TheLoaiController;
use App\Http\Controllers\LoaiTinController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\TinTucController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'buoi1'], function () {
    Route::get('/thome', function () {
        return view('thome');
    })->name('thome');
    Route::get('/ctdt', function () {
        return view('ctdt');
    })->name('ctdt');
    Route::get('/bt2', function () {
        return view('bt2');
    })->name('bt2');
});

Route::group(['prefix' => 'buoi2'], function () {
   //ví dụ 01 form
   Route::get('/formrequest',[baitap::class, "XulyForm"]);
   Route::post('/formrequest',[baitap::class, "XulyForm"]);
   //ví dụ 02 form
   Route::get('/viduform',[baitap::class, "getForm"]);
   Route::post('/viduform',[baitap::class, "postForm"]);
   //Hình Chữ chất
   Route::get("/hinhchunhat", [baitap::class, "getHinhChuNhat"])->name("hinhchunhat");
   Route::post("/hinhchunhat", [baitap::class, "postHinhChuNhat"])->name("hinhchunhat");
   //Tính lương
   Route::get("/tinhluong", [baitap::class, "getTinhLuong"]);
   Route::post("/tinhluong",[baitap::class, "postTinhLuong"]);
   //phương trình
   Route::get("/phuongtrinh", [baitap::class, "getPhuongTrinh"])->name("phuongtrinh");
   //Diện tích và chu vi
   Route::get("/dientichvachuvi", [baitap::class, "getDienTichVaChuVi"]);
   //Route::post("/dientichvachuvi",[baitap::class, "postDienTichVaChuVi"]);
   //Thanh toán tiền điện
   Route::get("/thanhtoantiendien", [baitap::class, "getThanhToanTienDien"]);
    //Phương trình bậc nhất
   Route::get("/phuongtrinhbacnhat", [baitap::class, "getPhuongTrinhBacNhat"]);

});

Route::group(['prefix' => 'buoi3'], function () {
    Route::get("/doctho", [baitap::class, "getDocTho"]);
    Route::get("/thome", [baitap::class, "getThoMe"])->name("thome");
    Route::get("/ngungon", [baitap::class, "getNguNgon"])->name("ngungon");
    Route::get("/binhluan", [baitap::class, "getBinhLuan"])->name("binhluan");

});

Route::group(['prefix' => 'buoi5'], function () {
    Route::get("/dsmonhoc", [ql_SinhVien::class, "getDSMonHoc"]);
    Route::get("/suamonhoc{mamh}", [ql_SinhVien::class, "getSuaMonHoc"])->name('suamonhoc');
    Route::post("/suamonhoc{mamh}", [ql_SinhVien::class, "postSuaMonHoc"])->name('suamonhoc');
    Route::get("/themmonhoc", [ql_SinhVien::class, "getThemMonHoc"])->name('themmonhoc');
    Route::post("/themmonhoc", [ql_SinhVien::class, "postThemMonHoc"])->name('themmonhoc');
    Route::get("/xoamonhoc{mamh}", [ql_SinhVien::class, "getXoaMonHoc"])->name('xoamonhoc');
});


Route::group(['prefix' => 'buoi6'], function () {
    //Route::get("/monhoc", [ql_SinhVien::class, "getMonHoc"]);
    //Môn học
    Route::get("/danhsachmonhoc", [ql_SinhVien::class, "getDanhSachMonHoc"])->name("danhsachmonhoc");
    Route::get("/suamonhoc{mamh}", [ql_SinhVien::class, "get_SuaMonHoc"])->name('suamonhoc');
    Route::post("/suamonhoc{mamh}", [ql_SinhVien::class, "post_SuaMonHoc"])->name('suamonhoc');
    Route::get("/themmonhoc", [ql_SinhVien::class, "get_ThemMonHoc"])->name('themmonhoc');
    Route::post("/themmonhoc", [ql_SinhVien::class, "post_ThemMonHoc"])->name('themmonhoc');
    Route::get("/xoamonhoc{mamh}", [ql_SinhVien::class, "get_XoaMonHoc"])->name('xoamonhoc');
//Khoa
    Route::get("/danhsachkhoa", [ql_SinhVien::class, "getDanhSachKhoa"])->name("danhsachkhoa");
    Route::get("/khoa", [ql_SinhVien::class, "getKhoa"])->name("khoa");

    Route::get("/suakhoa{makhoa}", [ql_SinhVien::class, "get_SuaKhoa"])->name('suakhoa');
    Route::post("/suakhoa{makhoa}", [ql_SinhVien::class, "post_SuaKhoa"])->name('suakhoa');
    Route::get("/themkhoa", [ql_SinhVien::class, "get_ThemKhoa"])->name('themkhoa');
    Route::post("/themkhoa", [ql_SinhVien::class, "post_ThemKhoa"])->name('themkhoa');
    Route::get("/xoakhoa/{makhoa}", [ql_SinhVien::class, "get_XoaKhoa"])->name('xoakhoa');
});

Route::get("login", [AdminController::class, "getLogin"])->name("login");
Route::post("login", [AdminController::class, "postLogin"])->name("login");
Route::get("logout", [AdminController::class, "getLogout"])->name("logout");


Route::group(['prefix' => 'tintuc'], function () {
    // Route::get("/trangchu", [PageController::class, "TrangChu"])->name("trangchu");
    Route::get("/trangchu", [PageController::class, "getTrangChu"])->name("trangchu");
    Route::get("/lienhe", [PageController::class, "getLienHe"])->name("lienhe");
    Route::get("/loaitin/{id}/{TenKhongDau}.html", [PageController::class, "getLoaiTin"])->name("loaitin");
    Route::get("/tintuc/{id}/{TieuDeKhongDau}.html", [PageController::class, "getTinTuc"])->name("tintuc");
    Route::get("/dangnhap", [PageController::class, "getDangNhap"])->name("dangnhap");
    Route::post("/dangnhap", [PageController::class, "postDangNhap"])->name("dangnhap");
    Route::get("/dangxuat", [PageController::class, "getDangXuat"])->name("dangxuat");
    Route::post("binhluan/{id}",[PageController::class, "postComment"])->name("binhluan");
    Route::get("nguoidung",[PageController::class, "getNguoiDung"])->name("nguoidung");
    Route::post("nguoidung",[PageController::class,"postNguoiDung"])->name("nguoidung");
    Route::get("dangky",[PageController::class, "getDangKy"])->name("dangky");
    Route::post("dangky",[PageController::class,"postDangKy"])->name("dangky");
    Route::get("gioithieu",[PageController::class, "getGioiThieu"])->name("gioithieu");
    Route::post("timkiem",[Pagecontroller::class,"postTimKiem"])->name("timkiem");

    Route::group(["prefix" => "admin", "middleware" => "AdminLogin"], function(){
        //profile
        Route::get("profileuser", [AdminController::class,"getProfileUser"])->name("profile");
        // Route::group(["prefix" => "chart"], function(){
        //     Route::get("chart", [ChartController::class, "getChart"])->name("ds_chart");
          
        // });
         Route::group(["prefix" => "aboutme"], function(){
            Route::get("aboutme", [AboutMe::class, "getAboutMe"])->name("aboutme");
          
        });
        Route::group(["prefix" => "theloai"], function(){
            Route::get("danhsach", [TheLoaiController::class, "getDanhSachTheLoai"])->name("ds_theloai");
            Route::get("them",[TheLoaiController::class, "getThemTheLoai"])->name("them_theloai");
            Route::post("them",[TheLoaiController::class, "postThemTheLoai"])->name("them_theloai");
            Route::get("sua/{id}",[TheLoaiController::class, "getSuaTheLoai"])->name("sua_theloai");
            Route::post("sua/{id}",[TheLoaiController::class, "postSuaTheLoai"])->name("sua_theloai");
            Route::get("xoa/{id}",[TheLoaiController::class, "getXoaTheLoai"])->name("xoa_theloai");
        });
        Route::group(["prefix" => "loaitin"], function(){
            Route::get("danhsach", [LoaiTinController::class, "getDanhSachLoaiTin"])->name("ds_loaitin");
            Route::get("them",[LoaiTinController::class, "getThemLoaiTin"])->name("them_loaitin");
            Route::post("them",[LoaiTinController::class, "postThemLoaiTin"])->name("them_loaitin");
            Route::get("sua/{id}",[LoaiTinController::class, "getSuaLoaiTin"])->name("sua_loaitin");
            Route::post("sua/{id}",[LoaiTinController::class, "postSuaLoaiTin"])->name("sua_loaitin");
            Route::get("xoa/{id}",[LoaiTinController::class, "getXoaLoaiTin"])->name("xoa_loaitin");
        });
        Route::group(["prefix" => "tintuc"], function(){
            Route::get("danhsach", [TinTucController::class, "getDanhSachTinTuc"])->name("ds_tintuc");
            Route::get("them",[TinTucController::class, "getThemTinTuc"])->name("them_tintuc");
            Route::post("them",[TinTucController::class, "postThemTinTuc"])->name("them_tintuc");
            Route::get("sua/{id}",[TinTucController::class, "getSuaTinTuc"])->name("sua_tintuc");
            Route::post("sua/{id}",[TinTucController::class, "postSuaTinTuc"])->name("sua_tintuc");
            Route::get("xoa/{id}",[TinTucController::class, "getXoaTinTuc"])->name("xoa_tintuc");
        });
        Route::group(["prefix" => "user"], function(){
            Route::get("user", [UserController::class, "getDanhSachUser"])->name("ds_user");
            Route::get("them",[UserController::class, "getThemUser"])->name("them_user");
            Route::post("them",[UserController::class, "postThemUser"])->name("them_user");
            Route::get("sua/{id}",[UserController::class, "getSuaUser"])->name("sua_user");
            Route::post("sua/{id}",[UserController::class, "postSuaUser"])->name("sua_user");
            Route::get("xoa/{id}",[UserController::class, "getXoaUser"])->name("xoa_user");
        });
        Route::group(["prefix" => "slide"], function(){
            Route::get("slide", [SlideController::class, "getDanhSachSlide"])->name("ds_slide");
            Route::get("them",[SlideController::class, "getThemSlide"])->name("them_slide");
            Route::post("them",[SlideController::class, "postThemSlide"])->name("them_slide");
            Route::get("sua/{id}",[SlideController::class, "getSuaSlide"])->name("sua_slide");
            Route::post("sua/{id}",[SlideController::class, "postSuaSlide"])->name("sua_slide");
            Route::get("xoa/{id}",[SlideController::class, "getXoaSlide"])->name("xoa_slide");
        });
        
        Route::group(['prefix' => 'ajax'], function(){
            Route::get('loaitin/{idtl}',[TinTucController::class, "getLoaiTin"]);
        });
    });
    
   

}); 



