<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ketqua extends Model
{
    use HasFactory;
    protected $table = "ketqua";
    protected $primarykey = "id";
    public $timestamps = false;

   public function sinhvien()
   {
    return $this->belongsTo(sinhvien::class, "masv", "masv");
   }

   public function monhoc(){
    return $this->belongsTo(monhoc::class, "id", "mamh");
   }
}
