<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    use HasFactory;
    protected $table = "tintuc";
    protected $primarykey ="id";
    public $timestamps = false;

    public function Loaitin()
    {
        return $this->belongsTo(LoaiTin::class, "idLoaiTin", "id");
    }
    public function Comment()
    {
        return $this->hasMany(Comment::class, "idTinTuc", "id");
    }
}
