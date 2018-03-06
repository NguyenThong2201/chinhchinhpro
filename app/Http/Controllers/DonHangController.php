<?php
/**
 * Created by PhpStorm.
 * User: nguyenbathong
 * Date: 1/10/2018
 * Time: 9:36 AM
 */
namespace App\Http\Controllers;
use App\Customer;
use App\Bill;
use App\BillDetail;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/**
* 
*/
class DonHangController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	
	public function getlist(){
		\DB::enableQueryLog();
		$listBill = DB::table('bills')->join('customer', 'bills.id_customer', '=' , 'customer.id')
		->select('customer.*', 'bills.*')
		->get();
		//print_r(\DB::getQueryLog());die();
		// echo "<pre>";
		// print_r($listBill);die();
		//echo "<pre>";
		// print_r($listBillDetail);die();
		return view('admin.donhang.dsdonhang',compact('listBill'));
	}
	public function getListBillDetail($id){
		$listBillDetail = BillDetail::where('id_bill','=', $id)->join('products', 'bill_detail.id_product', '=', 'products.id')->get();
		$bills = Bill::where('bills.id', $id)->join('customer','customer.id', '=', 'bills.id_customer')->select('bills.*','customer.name','customer.email','customer.address','customer.phone_number')->first();
		//$a = $listBillDetail->toArray();
		//echo $a['id_bill'];die();
		// echo "<pre>";
		// print_r($bills);die();
		//$customer = Customer::where('id', $id)->first();
		return view('admin.donhang.detail', compact('listBillDetail','bills'));
	}
	public function updateStatus(Request $request){
		$status = $request->status;
		$id_bull = $request->id_bill;
		//echo $id_bull;die();
		$bills = Bill::find($id_bull);
		$bills->status = $status;
		$bills->save();
		return redirect('admin/donhang/dsdon-hang');
	}
}