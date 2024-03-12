<?php

use App\Http\Controllers\Admin;
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


//โชว์หน้าต่างๆ
Route::get('/', function () {
    return view('customer');
});
Route::get('customer_detail', function () {
    return view('customer_detail');
});
Route::get('customer_data', function () {
    return view('customer_data');
});
Route::get('customer_form', function () {
    return view('customer_form');
});

//เรียกใช้ controller
Route::get('/', [Admin::class, 'dataCompany']);
Route::get('customer_data', [Admin::class, 'Datalist'])->name('customer_data');
Route::get('detail/{id}', [Admin::class, 'detailData'])->name('detail');

//อัพโหลดและอัพเดท
Route::post('upload', [Admin::class, 'upload'])->name('upload');
Route::post('update/{id}', [Admin::class, 'update'])->name('update');

//ลบและแก้ไข
Route::get('delete/{id}', [Admin::class, 'delete'])->name('delete');
Route::get('edit/{id}', [Admin::class, 'edit'])->name('edit');


