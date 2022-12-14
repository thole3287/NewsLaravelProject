<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sinhvien extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dssv = [
            [ 'hosv'=>'Nguyễn Thị', 'tensv'=>'Hải', 'phai'=>'nữ', 'ngaysinh'=>'79/03/23', 'noisinh'=>'Sài Gòn', 'diachi'=>'12 Võ Văn Tần Q3', 'malop'=>1, 'hocbong'=>'100000', 'hinh'=>""],

            ['hosv'=>'Trần Văn', 'tensv'=>'Chính', 'phai'=>'nam', 'ngaysinh'=>'80/12/24', 'noisinh'=>'Sài Gòn', 'diachi'=>'3 Nguyễn Bỉnh Khiêm Q1', 'malop'=>2, 'hocbong'=>'120000', 'hinh'=>""],

            ['hosv'=>'Lê Thị Bạch', 'tensv'=>'Yến', 'phai'=>'nữ', 'ngaysinh'=>'77/02/21', 'noisinh'=>'Hà Nội', 'diachi'=>'75 Pastuer Q3', 'malop'=>1, 'hocbong'=>'140000', 'hinh'=>""],

            ['hosv'=>'Trần Thanh', 'tensv'=>'Mai', 'phai'=>'nam', 'ngaysinh'=>'78/12/20', 'noisinh'=>'Bến Tre', 'diachi'=>'56 Hai Bà Trưng', 'malop'=>2, 'hocbong'=>0, 'hinh'=>""],

            ['hosv'=>'Trần Thị Thu', 'tensv'=>'Thủy', 'phai'=>'nữ', 'ngaysinh'=>'81/02/13', 'noisinh'=>'Sài Gòn', 'diachi'=>'40/3 An Lạc Vũng Tàu', 'malop'=>2, 'hocbong'=>0, 'hinh'=>""],

            ['hosv'=>'Trần Thị', 'tensv'=>'Thanh', 'phai'=>'nữ', 'ngaysinh'=>'79/12/31', 'noisinh'=>'Sài Gòn', 'diachi'=>'10 Nguyễn Du Q1', 'malop'=>3, 'hocbong'=>0, 'hinh'=>""],

            ['hosv'=>'Trần Anh', 'tensv'=>'Tuấn', 'phai'=>'nam', 'ngaysinh'=>'78/08/12', 'noisinh'=>'Long An', 'diachi'=>'12 Điện Biên Phủ - Long An', 'malop'=>3, 'hocbong'=>'80000', 'hinh'=>""],

            ['hosv'=>'Trần Thanh', 'tensv'=>'Triều', 'phai'=>'nam', 'ngaysinh'=>'80/01/01', 'noisinh'=>'Hà Nội', 'diachi'=>'03 Nguyễn Thiện Thuật Q3', 'malop'=>4, 'hocbong'=>'80000', 'hinh'=>""],

            ['hosv'=>'Trần Văn', 'tensv'=>'Chính', 'phai'=>'nam', 'ngaysinh'=>'77/01/01', 'noisinh'=>'Sài Gòn', 'diachi'=>'5 Nguyễn Văn Cừ Q5', 'malop'=>4, 'hocbong'=>'120000', 'hinh'=>""],

            ['hosv'=>'Lê Thị', 'tensv'=>'Kim', 'phai'=>'nam', 'ngaysinh'=>'81/12/20', 'noisinh'=>'Sài Gòn', 'diachi'=>'12 Nguyễn Thiệp Q4', 'malop'=> 4, 'hocbong'=>'120000', 'hinh'=>""]
        ];
        
            try {
                //code...
                    foreach($dssv as $sv)
                {
                    DB::table('sinhvien')->insert($sv);
                }
            } catch (\Throwable $th) {
                //throw $th;
            }
            
        
    }
}
