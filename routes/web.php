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
use App\TheLoai;
Route::get('/', function () {
    return view('welcome');
});
// Route::get('test', function()
// {
//     return view('trangchu.theloai.sua');
// });
Route::get('trangchu','Trangchucontroller@trangchu');
Route::get('/admin','AdminController@index')->name('admin');

Route::group(['prefix'=>'admin'], function()
{
    Route::group(['prefix'=>'theloai'],function()
    {
            Route::get('danhsach','Theloaicontroller@getDanhsach')->name('theloai.danhsach');
            Route::get('them','Theloaicontroller@getThem')->name('theloai.them');
            Route::post('them','Theloaicontroller@postThem');
            Route::get('sua/{id}','Theloaicontroller@getSua');
            Route::post('sua/{id}','Theloaicontroller@postSua');
            Route::get('xoa/{id}','Theloaicontroller@getXoa');
    });
});
Route::group(['prefix'=>'admin','middleware'=>'adminlogin'], function()
{
    Route::group(['prefix'=>'tintuc'],function()
    {
            Route::get('danhsach','Tintuccontroller@getDanhsach')->name('tintuc.danhsach');
            Route::get('them','Tintuccontroller@getThem')->name('tintuc.them');
            Route::post('them','Tintuccontroller@postThem');
            Route::get('sua/{id}','Tintuccontroller@getSua');
            Route::post('sua/{id}','Tintuccontroller@postSua');
            Route::get('xoa/{id}','Tintuccontroller@getXoa');
    });
});
Route::group(['prefix'=>'admin','middleware'=>'adminlogin'], function()
{
    Route::group(['prefix'=>'loaitin'],function()
    {
            Route::get('danhsach','Loaitincontroller@getDanhsach')->name('loaitin.danhsach');
            Route::get('them','Loaitincontroller@getThem')->name('loaitin.them');
            Route::post('them','Loaitincontroller@postThem');
            Route::get('sua/{id}','Loaitincontroller@getSua');
            Route::post('sua/{id}','Loaitincontroller@postSua');
            Route::get('xoa/{id}','Loaitincontroller@getXoa');
    });
});
Route::group(['prefix'=>'admin','middleware'=>'adminlogin'], function()
{
    Route::group(['prefix' => 'ajax'], function () 
    {
            Route::get('loaitin/{idTheLoai}', 'Ajaxcontroller@getLoaiTin');
    });
});
Route::get('admin/dangnhap', 'Usercontroller@getdangnhap');
Route::post('admin/dangnhap', 'Usercontroller@postdangnhap');

