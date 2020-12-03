<?php

use Illuminate\Support\Facades\Route;
use App\Models\TheLoai;
use App\Http\Controllers\TheLoaiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->group(function (){
    Route::prefix('theloai')->group(function (){
        Route::get('danhsach',[TheLoaiController::class,'getDanhSach'])->name('theloai.getDanhSach');
        Route::get('sua',[TheLoaiController::class,'getSua'])->name('theloai.getSua');
        Route::get('them',[TheLoaiController::class,'getThem'])->name('theloai.getThem');

    });
//    Route::prefix('loaitin')->group(function (){
//        Route::get('danhsach',[TheLoaiController::class,'getDanhSach'])->name('loaitin.getDanhSach');
//        Route::get('sua',[TheLoaiController::class,'getSua'])->name('loaitin.getSua');
//        Route::get('them',[TheLoaiController::class,'getThem'])->name('loaitin.getThem');
//
//    });
//    Route::prefix('tintuc')->group(function (){
//        Route::get('danhsach',[TheLoaiController::class,'getDanhSach'])->name('tintuc.getDanhSach');
//        Route::get('sua',[TheLoaiController::class,'getSua'])->name('tintuc.getSua');
//        Route::get('them',[TheLoaiController::class,'getThem'])->name('tintuc.getThem');
//
//    });
});
