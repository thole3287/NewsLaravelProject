<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lophoc extends Model
{
    use HasFactory;
    protected $table = "lophoc";
    protected $primarykey = "malop";
    public $timestamps = false;

    public function khoa(){
        return $this->belongsTo(khoa::class, "makhoa", "makhoa");
    }
    public function sinhvien()
    {
        return $this->hasMany(sinhvien::class, "malop", "malop");
    }
}
