<?php

use App\Http\Controllers\SinhVienController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
#SinhVien - Model
Route::get('/sinhvien',[SinhVienController::class,'index'])->name('sinhvien.index');
Route::get('/sinhvien/detail/{mamsv}',[SinhVienController::class,'getsinhvienById'])->name('sinhvien.detail');
# thêm mới
Route::get('/sinhvien/create',[SinhVienController::class,'create'])->name('sinhvien.create');
Route::post('/sinhvien/create',[SinhVienController::class,'createSubmit'])->name('sinhvien.createSubmit');
# sửa thông tin môn học
Route::get('/sinhvien/edit/{masv}',[SinhVienController::class,'edit'])->name('sinhvien.edit');
Route::post('/sinhvien/edit',[SinhVienController::class,'editSubmit'])->name('sinhvien.editSubmit');
## Xóa thông tin môn học
Route::get('/sinhvien/delete/{masv}',[SinhVienController::class,'delete'])->name('sinhvien.delete');
