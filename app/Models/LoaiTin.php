<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
    use HasFactory;
    protected $table = "loaitin";
    protected $primarykey ="id";
    public $timestamps = true;


    public function Tintuc(){
        return $this->hasMany(TinTuc::class, "idLoaiTin", "id");
    }
    public function Theloai()
    {
        return $this->belongsTo(TheLoai::class, "idTheLoai", "id");
    }
}
