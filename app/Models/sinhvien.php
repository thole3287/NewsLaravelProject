<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sinhvien extends Model
{
    use HasFactory;
    protected $table = "sinhvien";
    protected $primarykey = "masv";
    public $timestamps = false;
    
    public function lophoc(){
        return $this->belongsTo(lophoc::class, "malop", "malop");
    }

    public function ketqua(){
        return $this->hasMany(ketqua::class, "masv", "masv");
    }
}
