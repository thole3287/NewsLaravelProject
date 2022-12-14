<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    use HasFactory;
    protected $table = "theloai";
    protected $primarykey ="id";
    public $timestamps = true;


    public function Loaitin()
    {
        return $this->hasMany(LoaiTin::class, "idTheLoai", "id");
    }
    public function TinTuc()
    {
        return $this->hasManyThrough(TinTuc::class, LoaiTin::class, "idTheLoai", "idLoaiTin", "id");
    }
   
}
