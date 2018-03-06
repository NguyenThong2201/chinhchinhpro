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
Route::get('trang-chu', 'HomeController@index')->name('trang-chu');
Route::get('/', 'HomeController@index')->name('trang-chu');
Route::get('index', 'HomeController@index')->name('trang-chu');
Route::post('trang-chu', 'HomeController@index')->name('trang-chu');
Route::get('test1', 'HomeController@test')->name('test1');
Route::post('test1', 'HomeController@test')->name('test1');
Route::get('chi-tiet/{name_sale}','HomeController@detail')->name('chi-tiet');
Route::get('dang-nhap', 'HomeController@login')->name('dang-nhap');
Route::post('dang-nhap', 'HomeController@postLogin')->name('dang-nhap');
Route::get('dang-ki', 'HomeController@Register')->name('dang-ki');
Route::post('dang-ki', 'HomeController@postRegister')->name('dang-ki');
Route::get('dang-xuat', 'HomeController@Logout')->name('dang-xuat');
Route::get('lien-he', 'HomeController@getContact')->name('lien-he');
Route::get('thoi-trang-nu', 'HomeController@typeProduct')->name('thoi-trang-nu');
Route::get('thoi-trang/{sex}', 'HomeController@getTypeWomen')->name('thoi-trang');
Route::get('gio-hang', 'HomeController@getCheckOut')->name('gio-hang');
Route::get('xoa-item/{id}', 'HomeController@postDeleteItemCart')->name('xoa-item');
Route::post('them-gio-hang', 'HomeController@getAddCall')->name('them-gio-hang');
Route::post('dat-hang', 'HomeController@postCheckout')->name('dat-hang');
Route::post('/message/send', 'HomeController@addFeedback')->name('front.fb');
//Route::post('ajax-page', 'HomeController@ajaxPage')->name('ajax-page');
Auth::routes();
Route::group(['prefix'=>'admin'],function(){
	Route::get('dashboard',[
			'as'=>'dashboard',
			'uses'=>'SanPhamController@getDashboard'
			]);
	Route::group(['prefix'=>'sanpham'],function(){
		Route::get('danh-sach-san-pham',[
			'as'=>'dssanpham',
			'uses'=>'SanPhamController@getDSSanPham'
			]);
		Route::get('them-san-pham',[
			'as'=>'themsanpham',
			'uses'=>'SanPhamController@getThemSanPham'
			]);
		Route::post('them-san-pham',[
			'as'=>'themsanpham',
			'uses'=>'SanPhamController@postThemSanPham'
			]);
		Route::get('sua-san-pham/{masp}',[
			'as'=>'suasanpham',
			'uses'=>'SanPhamController@getSuaSanPham'
			]);
		Route::post('sua-san-pham/{masp}',[
			'as'=>'suasanpham',
			'uses'=>'SanPhamController@postSuaSanPham'
			]);
		Route::get('xoa-san-pham/{masp}',[
			'as'=>'xoasanpham',
			'uses'=>'SanPhamController@getXoaSanPham']);
	});
	Route::group(['prefix'=>'loaisanpham'],function(){
		Route::get('dsloai-san-pham',[
			'as'=>'dsloaisanpham',
			'uses'=>'LoaiSanPhamController@getDSLoaiSanPham'
			]);
		Route::get('them-lsp',[
			'as'=>'themloaisanpham',
			'uses'=>'LoaiSanPhamController@getThemLoaiSanPham'
			]);
		Route::post('them-lsp',[
			'as'=>'themloaisanpham',
			'uses'=>'LoaiSanPhamController@postThemLoaiSanPham'
			]);
		Route::get('sua-loai-san-pham/{maloai}',[
			'as'=>'sualoaisanpham',
			'uses'=>'LoaiSanPhamController@getSuaLoaiSanPham'
			]);
		Route::post('sua-loai-san-pham/{maloai}',[
			'as'=>'sualoai',
			'uses'=>'LoaiSanPhamController@postSuaLoaiSanPham'
			]);
		Route::get('xoa-loai-san-pham/{maloai}',[
			'as'=>'xoaloaisanpham',
			'uses'=>'LoaiSanPhamController@getXoaLoaiSanPham'
			]);
	});
	Route::group(['prefix'=>'taikhoan'],function(){
		Route::get('dstai-khoan',[
			'as'=>'dstaikhoan',
			'uses'=>'TaiKhoanController@getDSTaiKhoan'
			]);
		Route::get('them-tai-khoan',[
			'as'=>'themtaikhoan',
			'uses'=>'TaiKhoanController@getThemTaiKhoan'
			]);
		Route::get('sua-tai-khoan/{matk}',[
			'as'=>'suataikhoan',
			'uses'=>'TaiKhoanController@getSuaTaiKhoan'
			]);
		Route::get('xoa-tai-khoan',[
			'as'=>'xoataikhoan',
			'uses'=>'TaiKhoanController@getXoaTaiKhoan']);
	});
	Route::group(['prefix'=>'donhang'],function(){
		Route::get('dsdon-hang',[
			'as'=>'dsdonhang',
			'uses'=>'DonHangController@getlist'
			]);
		Route::get('chi-tiet-don-hang/{id}',[
			'as'=>'detail',
			'uses'=>'DonHangController@getListBillDetail'
			]);
		Route::post('cap-nhat-status',[
			'as'=>'updatestatus',
			'uses'=>'DonHangController@updateStatus'
			]);
	});
});

