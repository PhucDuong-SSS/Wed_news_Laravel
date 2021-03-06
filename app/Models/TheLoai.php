<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    use HasFactory;
    protected $table = 'theloai';

    public function loaitin()
    {
        return $this->hasMany(LoaiTin::class,'idTheLoai','id');
    }
    public function tintuc()
    {
        return $this->hasManyThrough(TinTuc::class,LoaiTin::class,'idTheLoai','idLoaiTin','id');

    }


}
