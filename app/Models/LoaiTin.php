<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
    use HasFactory;
    protected $table = 'loaitin';

    public function theloai()
    {
        return $this->belongsTo(TheLoai::class,'idTheLoai','id');
    }
    public function tintuc()
    {
        return $this->hasMany(TinTuc::class,'idLoaiTin','id');
    }
}
