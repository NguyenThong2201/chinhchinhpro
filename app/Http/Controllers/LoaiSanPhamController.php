<?php

namespace App\Http\Controllers;
use App\ProductsType;
use App\Custom;
use Illuminate\Http\Request;

class LoaiSanPhamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getDSLoaiSanPham(){
    	$dsloai = ProductsType::all();
    	return view('admin.loaisanpham.dsloai',compact('dsloai'));
    }
    public function getThemLoaiSanPham(){
    	return view('admin.loaisanpham.themloai');
    }
    public function postThemLoaiSanPham(Request $req){
        $this->validate($req,[
                'tenloai'=>'required|unique:type_products,name|min:2|max:100',
                'ghichu'=>'required|min:5|max:300'
            ],[
                'tenloai.required'=>'Bạn chưa nhập tên loại sản phẩm',
                'tenloai.unique'=>'Tên loại sản phẩm bị trùng',
                'tenloai.min'=>'Tên loại quả ngắn',
                'tenloai.max'=>'Tên loại quả dài',
                'ghichu.required'=>'Ghi chủ không được trống',
                'ghichu.max'=>'Bạn ghi chủ quả dài',
                'ghichu.min'=>'Bạn ghi chú quả ngắn'
            ]);
        $loai = new ProductsType;
        $custom = new Custom;
        $loai->name = $req->tenloai;
        $loai->name_sale = strtolower($custom->convert_vi_to_en($loai->name));
        $loai->sex = 'nam';
        $loai->description = $req->ghichu;
        $loai->save();
    	return redirect()->back()->with('thongbao','Thêm thành công !');
    }
    public function getSuaLoaiSanPham($loai){
    	$loaisp = ProductsType::where('id',$loai)->first();
    	return view('admin.loaisanpham.sualoai',compact('loaisp'));
    }
    public function postSuaLoaiSanPham(Request $req,$id){
        $loaisp = ProductsType::find($id);
        $this->validate($req,
            [
                'tenloai'=>'required|min:2|max:100',
                'ghichu'=>'required|min:5|max:300'
            ],
            [
                'tenloai.required'=>'Bạn chưa nhập tên loại sản phẩm',
                'tenloai.min'=>'Tên loại quả ngắn',
                'tenloai.max'=>'Tên loại quả dài',
                'ghichu.required'=>'Ghi chủ không được trống',
                'ghichu.max'=>'Bạn ghi chủ quả dài',
                'ghichu.min'=>'Bạn ghi chú quả ngắn'
            ]);
        $loaisp->name = $req->tenloai;
        $loaisp->description = $req->ghichu;
        $loaisp->save();
    	return redirect('admin/loaisanpham/sua-loai-san-pham/'.$id)->with('thongbao','Sửa thành công !');
    }
    public function getXoaLoaiSanPham($id){
        $loaisp = ProductsType::find($id);
        $loaisp->delete();
    	return redirect('admin/loaisanpham/dsloai-san-pham')->with('thongbao','Xóa loại sản phẩm thành công !');
    }
}
