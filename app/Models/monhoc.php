<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class monhoc extends Model
{
    use HasFactory;
    protected $table = "monhoc";
    protected $primarykey = "id";
    public $timestamps = false;

    public function ketqua(){
        return $this->hasMany(ketqua::class, "id", "mamh");
    }
}
