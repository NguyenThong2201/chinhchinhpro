<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class TaiKhoanController extends Controller
{
    public function getDSTaiKhoan()
    {
    	$dstaikhoan = User::all();
    	return view('admin.taikhoan.dstaikhoan',compact('dstaikhoan'));
    }
    public function getThemTaiKhoan(){
    	return view('admin.taikhoan.themtaikhoan');
    }
    public function getSuaTaiKhoan($matk){
    	$taikhoan = User::where('id',$matk)->first();
    	return view('admin.taikhoan.suataikhoan',compact('taikhoan'));
    }
}
