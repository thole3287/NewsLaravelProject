<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ketqua extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ketQua = [
            ['mamh'=>1, 'lanthi'=>1, 'masv'=>1, 'diemthi'=>2.0],
            ['mamh'=>1, 'lanthi'=>1, 'masv'=>2, 'diemthi'=>7.5],
            ['mamh'=>1, 'lanthi'=>1, 'masv'=>3, 'diemthi'=>5.0],
            ['mamh'=>1, 'lanthi'=>1, 'masv'=>4, 'diemthi'=>7.0],
            ['mamh'=>1, 'lanthi'=>1, 'masv'=>5, 'diemthi'=>4.0],
            
            ['mamh'=>2, 'lanthi'=>1, 'masv'=>1, 'diemthi'=>6.0],
            ['mamh'=>2, 'lanthi'=>1, 'masv'=>2, 'diemthi'=>7.0],
            ['mamh'=>2, 'lanthi'=>1, 'masv'=>3, 'diemthi'=>5.5],
            ['mamh'=>2, 'lanthi'=>1, 'masv'=>4, 'diemthi'=>6.5],
            ['mamh'=>2, 'lanthi'=>1, 'masv'=>5, 'diemthi'=>7.5],

            ['mamh'=>3, 'lanthi'=>1, 'masv'=>1, 'diemthi'=>9.0],
            ['mamh'=>3, 'lanthi'=>1, 'masv'=>2, 'diemthi'=>10.0],
            ['mamh'=>3, 'lanthi'=>1, 'masv'=>3, 'diemthi'=>3.0],
            ['mamh'=>3, 'lanthi'=>1, 'masv'=>4, 'diemthi'=>3.0],
            ['mamh'=>3, 'lanthi'=>1, 'masv'=>5, 'diemthi'=>6.0],

            ['mamh'=>4, 'lanthi'=>1, 'masv'=>1, 'diemthi'=>8.0],
            ['mamh'=>4, 'lanthi'=>1, 'masv'=>2, 'diemthi'=>3.5],
            ['mamh'=>4, 'lanthi'=>1, 'masv'=>3, 'diemthi'=>5.0],
            ['mamh'=>4, 'lanthi'=>1, 'masv'=>4, 'diemthi'=>8.0],
            ['mamh'=>4, 'lanthi'=>1, 'masv'=>5, 'diemthi'=>6.0],

            ['mamh'=>5, 'lanthi'=>1, 'masv'=>6, 'diemthi'=>7.5],
            ['mamh'=>5, 'lanthi'=>1, 'masv'=>7, 'diemthi'=>9.0],
            ['mamh'=>5, 'lanthi'=>1, 'masv'=>8, 'diemthi'=>4.5],
            ['mamh'=>5, 'lanthi'=>1, 'masv'=>9, 'diemthi'=>4.0],
            ['mamh'=>5, 'lanthi'=>1, 'masv'=>10, 'diemthi'=>8.0],

            ['mamh'=>6, 'lanthi'=>1, 'masv'=>6, 'diemthi'=>6.5],
            ['mamh'=>6, 'lanthi'=>1, 'masv'=>7, 'diemthi'=>4.0],
            ['mamh'=>6, 'lanthi'=>1, 'masv'=>8, 'diemthi'=>3.5],
            ['mamh'=>6, 'lanthi'=>1, 'masv'=>9, 'diemthi'=>4.5],
            ['mamh'=>6, 'lanthi'=>1, 'masv'=>10, 'diemthi'=>7.5],

            ['mamh'=>7, 'lanthi'=>1, 'masv'=>6, 'diemthi'=>5.0],
            ['mamh'=>7, 'lanthi'=>1, 'masv'=>7, 'diemthi'=>6.5],
            ['mamh'=>7, 'lanthi'=>1, 'masv'=>8, 'diemthi'=>7.0],
            ['mamh'=>7, 'lanthi'=>1, 'masv'=>9, 'diemthi'=>5.5],
            ['mamh'=>7, 'lanthi'=>1, 'masv'=>10, 'diemthi'=>4.0],

            ['mamh'=>8, 'lanthi'=>1, 'masv'=>6, 'diemthi'=>5.0],
            ['mamh'=>8, 'lanthi'=>1, 'masv'=>7, 'diemthi'=>4.0],
            ['mamh'=>8, 'lanthi'=>1, 'masv'=>8, 'diemthi'=>6.5],
            ['mamh'=>8, 'lanthi'=>1, 'masv'=>9, 'diemthi'=>7.0],
            ['mamh'=>8, 'lanthi'=>1, 'masv'=>10, 'diemthi'=>8.5],

            ['mamh'=>9, 'lanthi'=>1, 'masv'=>6, 'diemthi'=>5.0],
            ['mamh'=>9, 'lanthi'=>1, 'masv'=>7, 'diemthi'=>5.5],
            ['mamh'=>9, 'lanthi'=>1, 'masv'=>8, 'diemthi'=>5.0],
            ['mamh'=>9, 'lanthi'=>1, 'masv'=>9, 'diemthi'=>6.5],
            ['mamh'=>9, 'lanthi'=>1, 'masv'=>10, 'diemthi'=>10]


        ];

        try {
            //code...
            foreach($ketQua as $kq)
            {
                DB::table('ketqua')->insert($kq);
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
