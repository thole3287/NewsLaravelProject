<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class monhoc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $dsMonHoc = [
            ['tenmonhoc' => 'Trí tuệ nhân tạo', 'sotinchi'=>4, 'thaotac' =>""],
            ['tenmonhoc' => 'Truyền tin', 'sotinchi'=>4, 'thaotac'=>""],
            ['tenmonhoc' => 'Đồ họa', 'sotinchi'=>8, 'thaotac' =>""],
            ['tenmonhoc' => 'Văn phạm ngoại ngữ', 'sotinchi'=>7, 'thaotac' =>""],
            ['tenmonhoc' => 'Cơ sở dữ liệu', 'sotinchi'=>3, 'thaotac' =>""],
            ['tenmonhoc' => 'Lập trình java', 'sotinchi'=>3, 'thaotac' =>""],
            ['tenmonhoc' => 'Lập trình mạng', 'sotinchi'=>3, 'thaotac'=>""],
            ['tenmonhoc' => 'Luật CNTT', 'sotinchi'=>2, 'thaotac'=>""],
            ['tenmonhoc' => 'Lập trình web', 'sotinchi'=>3, 'thaotac' =>""],
            ['tenmonhoc' => 'Thiết kế mạng', 'sotinchi'=>2, 'thaotac' =>""]
    ];
   
        //code...
        foreach($dsMonHoc as $mh)
        {
            DB::table('monhoc')->insert($mh);
        }
    
    }
}
