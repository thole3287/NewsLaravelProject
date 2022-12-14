<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class khoa extends Model
{
    use HasFactory;
    protected $table = "khoa";
    protected $primarykey = "makhoa";
    public $timestamps = false;
    

    public function lophoc(){
        return $this->hasMany(lophoc::class, "makhoa", "makhoa");//
    }
}
