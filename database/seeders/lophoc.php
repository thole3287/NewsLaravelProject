<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class lophoc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dsLopHoc= [
            ['tenlop'=>'Cao đẳng tin học A', 'gvcn'=>'Nguyễn Hoài Nam', 'makhoa'=>1, 'siso'=>100, 'hocphi'=>800000],

            ['tenlop'=>'Cao đẳng tin học B', 'gvcn'=>'Trần Thị Bích Nga', 'makhoa'=>1, 'siso'=>80, 'hocphi'=>800000],

            ['tenlop'=>'Cao đẳng cơ khí A', 'gvcn'=>'Hồ Văn Chung', 'makhoa'=>4, 'siso'=>120, 'hocphi'=>950000],

            ['tenlop'=>'Cao đẳng cơ khí B', 'gvcn'=>'Nguyễn Quốc Thắng', 'makhoa'=>4, 'siso'=>100, 'hocphi'=>900000]
        ];
        try {
            //code...
            foreach($dsLopHoc as $lophoc)
            {
                DB::table('lophoc')->insert($lophoc);
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
