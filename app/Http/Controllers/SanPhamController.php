<?php

namespace App\Http\Controllers;
use App\Products;
use App\ProductsType;
use App\Custom;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getDashboard(){
        return view('admin.dashboard.dashboard');
    }
    public function getDSSanPham(){
        $dssanpham = Products::all();
    	return view('admin.sanpham.danhsachsanpham',compact('dssanpham'));
    }
    public function getThemSanPham(){
        $loaisp = ProductsType::all();
    	return view('admin.sanpham.themsanpham',compact('loaisp'));
    }
    public function postThemSanPham(Request $req){
        $this->validate($req,[
                'tensp'=>'required|unique:type_products,name|min:2|max:100',
                'giaban'=>'required',
                'giakhuyenmai'=>'required',
                'ghichu'=>'required|min:5|max:300'
            ],[
                'tensp.required'=>'Bạn chưa nhập tên sản phẩm',
                'tensp.unique'=>'Tên sản phẩm bị trùng',
                'tensp.min'=>'Tên sản phẩm quả ngắn',
                'tensp.max'=>'Tên sản phẩm quả dài',
                'giaban.required'=>'Giá bán không được trống',
                'giakhuyenmai.required'=>'Giá khuyến mãi không được trống',
                'ghichu.required'=>'Ghi chủ không được trống',
                'ghichu.max'=>'Bạn ghi chủ quả dài',
                'ghichu.min'=>'Bạn ghi chú quả ngắn'
            ]);
        $sanpham = new Products;
        $custom = new Custom;
        $sanpham->name = $req->tensp;
        $sanpham->name_sale = strtolower($custom->convert_vi_to_en($sanpham->name));
        $sanpham->id_type = $req->loaisp;
        $sanpham->sex = $req->sex;
        $sanpham->unit_price =  $custom->xoadauphay($req->giaban);
        $sanpham->promotion_price =  $custom->xoadauphay($req->giakhuyenmai);
        $sanpham->unit = $req->donvi;
        $sanpham->active = $req->moi;
        $sanpham->description = $req->ghichu;
        if($req->hasFile('hinh'))
        {
            $file = $req->file('hinh');
            $duoihinh = $file->getClientOriginalExtension();
            if($duoihinh != 'jpg' && $duoihinh != 'png' && $duoihinh != 'jpeg')
            {
                return redirect('admin/sanpham/them-san-pham')->with('thongbao','Hình ảnh không đúng định dạng');
            } 
            $nameimage = $file->getClientOriginalName();
            $hinh = str_random(3)."_".$nameimage;
            while (file_exists("source/image/product/".$hinh)) {
                $hinh = str_random(3)."_".$nameimage;
            }
            $file->move("source/image/product",$hinh);
            $sanpham->image = $hinh;
        }
        else
        {
            return redirect('admin/sanpham/them-san-pham')->with('thongbao','Vui lòng chọn hình Sản Phẩm');
        }
        $sanpham->save();
    	return redirect('admin/sanpham/them-san-pham')->with('thongbao','Thêm mới thành công');
    }
    public function getSuaSanPham($masp){
        $sanpham = Products::where('id',$masp)->first();
        $loaisp = ProductsType::all();
    	return view('admin.sanpham.suasanpham',compact('sanpham','loaisp'));
    }
    public function postSuaSanPham(Request $req,$id){
        $sanpham = Products::find($id);
        $this->validate($req,[
                'tensp'=>'required|min:2|max:100',
                'giaban'=>'required',
                'giakhuyenmai'=>'required',
                'ghichu'=>'required|min:5|max:300'
            ],[
                'tensp.required'=>'Bạn chưa nhập tên sản phẩm',
                'tensp.min'=>'Tên sản phẩm quả ngắn',
                'tensp.max'=>'Tên sản phẩm quả dài',
                'giaban.required'=>'Giá bán không được trống',
                'giakhuyenmai.required'=>'Giá khuyến mãi không được trống',
                'ghichu.required'=>'Ghi chủ không được trống',
                'ghichu.max'=>'Bạn ghi chủ quả dài',
                'ghichu.min'=>'Bạn ghi chú quả ngắn'
            ]);
        $sanpham->name = $req->tensp;
        $sanpham->id_type = $req->loaisp;
        $sanpham->unit_price = $req->giaban;
        $sanpham->promotion_price = $req->giakhuyenmai;
        $sanpham->unit = $req->donvi;
        $sanpham->active = $req->moi;
        $sanpham->description = $req->ghichu;
        if($req->hasFile('hinh'))
        {
            $file = $req->file('hinh');
            $duoihinh = $file->getClientOriginalExtension();
            if($duoihinh != 'jpg' && $duoihinh != 'png' && $duoihinh != 'jpeg')
            {
                return redirect('admin/sanpham/sua-san-pham/'.$id)->with('thongbao','Hình ảnh không đúng định dạng');
            } 
            $nameimage = $file->getClientOriginalName();
            $hinh = str_random(3)."_".$nameimage;
            while (file_exists("source/image/product/".$hinh)) {
                $hinh = str_random(3)."_".$nameimage;
            }
            $file->move("source/image/product/",$hinh);
            unlink("source/image/product/".$sanpham->image);
            $sanpham->image = $hinh;
        }
        $sanpham->save();
    	return redirect('admin/sanpham/sua-san-pham/'.$id)->with('thongbao','Sửa thành công');
    }
    public function getXoaSanPham($id){
        $sanpham = Products::find($id);
        $sanpham->active = 0;
        $sanpham->save();
    	return redirect('admin/sanpham/danh-sach-san-pham')->with('thongbao','Xóa Sản Phẩm Thành công');
    }
}
