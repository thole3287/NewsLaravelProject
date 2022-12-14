<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class khoa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $dskhoa =[
            ['tenkhoa'=>"Công nghệ thông tin"],
            ['tenkhoa'=>"Đại cương"],
            ['tenkhoa'=>"Quan hệ hợp tác quốc tế"],
            ['tenkhoa'=>"cơ khí"]
        ];
        try {
            foreach ($dskhoa as $khoa) {
                DB::table("khoa")->insert($khoa);
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
