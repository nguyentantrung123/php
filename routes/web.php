<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', 'LoginController@getLogin');
Route::post('/', 'LoginController@postLogin')->name('login');
Route::get('logout','LoginController@getLogout');

Route::get('/home', function () {
    return view('home');
});

Route::get('/nhanvien', function () {   
    return view('nhanvien');
});

Route::get('/doanhthu', function () {
    return view('doanhthu');
});

Route::get('/tkmonan', function () {
    return view('tkmonan');
});
  
Route::post('/thucdon/timkiem',"SeachController@timkiem")->name('timkiem.timkiem');
//thực đon
Route::get('/thucdon', "mon_anController@Index")->name('mon_an.index');
Route::post('thucdon', "mon_anController@store") ->name('mon_an.store');
Route::get('/thucdon/create', "mon_anController@create")->name('mon_an.create');
Route::get('/thucdon/edit/{id}',"mon_anController@edit")->name('mon_an.edit');
Route::get('/thucdon/{id}/destroy',"mon_anController@destroy")->name('mon_an.destroy');
Route::patch('/thucdon/{id}',"mon_anController@update") ->name('mon_an.update');
Route::get('/thucdon/show/{id}', "mon_anController@show")->name('mon_an.show');


//bàn
Route::get('/ban', "banController@Index")->name('ban.index');
Route::post('ban', "banController@store") ->name('ban.store');
Route::get('/ban/create',"banController@create")->name('ban.create');
Route::get('/ban/edit/{id}',"banController@edit")->name('ban.edit');
Route::get('/ban/{id}/destroy',"banController@destroy")->name('ban.destroy');
Route::patch('/ban/{id}',"banController@update") ->name('ban.update');
Route::get('/ban/show/{id}',"banController@show")->name('ban.show');


//Loại món
Route::get('/loai', "loaiController@Index")->name('loai.index');
Route::post('loai', "loaiController@store") ->name('loai.store');
Route::get('/loai/create',"loaiController@create")->name('loai.create');
Route::get('/loai/edit/{id}',"loaiController@edit")->name('loai.edit');
Route::get('/loai/{id}/destroy',"loaiController@destroy")->name('loai.destroy');
Route::patch('/loai/{id}',"loaiController@update") ->name('loai.update');
Route::get('/loai/show/{id}',"loaiController@show")->name('loai.show');

//tìm kiếm nhân viên

//Nhân viên
Route::get('/nhanvien',"nhanvienController@Index")->name('nhanvien.index');
Route::post('nhanvien', "nhanvienController@store") ->name('nhanvien.store');
Route::post('nhanvien',"SeachController@timnhanvien")->name('NV.timkiem');
Route::get('/nhanvien/create', "nhanvienController@create")->name('nhanvien.create');
Route::get('/nhanvien/edit/{id}',"nhanvienController@edit")->name('nhanvien.edit');
Route::get('/nhanvien/{id}/destroy',"nhanvienController@destroy")->name('nhanvien.destroy');
Route::patch('/nhanvien/{id}',"nhanvienController@update")->name('nhanvien.update');
Route::get('/nhanvien/show/{id}', "nhanvienController@show")->name('nhanvien.show');
?>    





