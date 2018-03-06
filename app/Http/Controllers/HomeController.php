<?php
/**
 * Created by PhpStorm.
 * User: nguyenbathong
 * Date: 1/10/2018
 * Time: 9:36 AM
 */
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Slide;
use App\Products;
use App\User;
use App\Customer;
use App\Bill;
use App\BillDetail;
use Hash;
use App\Cart;
use Session;
use Illuminate\Http\Request;
use Mail;
class HomeController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index(Request $request)
    {
        \DB::enableQueryLog();
        // $products = Products::where('active', '=', 1)->paginate(4); 
        // if ($request->ajax()) {
        // //     return view('home.home', ['products' => $products])->render();  
        // // }
        //     $page = $request->page;
        //     $page = $_GET['page'];
        // }
        $page = $request->page;
        if (!empty($page)) {
            $limit = 8;
            settype($page, 'int');
            $from = ($page - 1) * $limit + 1;
            $products = Products::where('active', '=', 1)->offset($from)->paginate($limit);
            // print_r(\DB::getQueryLog());die();
            return view('home.products', compact('products'));
        }else{
            $products = Products::where('active', '=', 1)->paginate(8);
            //print_r(\DB::getQueryLog());die();
        }
        $slide = Slide::all();
        //$assigData = ['products'=>$products, 'slide'=>$slide];
        //return view('master', $assigData);
        return view('home.home', compact('products','slide'));
    }

    public function detail($name_sale){
        $product_detail = Products::where('name_sale', '=', $name_sale)->first();
        $product_same_kind = Products::where('id_type', '=', $product_detail->id_type)->paginate(4);
        return view('home.detail',compact('product_detail','product_same_kind'));
    }

    public function login()
    {
        return view('home.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request,
            [
                'email'=>'required|email',
                'password'=>'required|min:6|max:20'
            ],
            [
                'email.required'=>'Vui lòng nhập Email',
                'email.email'=>'Eamail không đúng định dạng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu phải lớn hơn 6 kí tự'
            ]);
        $email = $request['email'];
        $pass = $request['password'];
        $taikhoan = new User;
        if(Auth::attempt(['email'=>$email,'password'=>$pass])){
            return redirect()->route('trang-chu');
        }else{
            return redirect()->back()->with('thongbao','Email hoặc mật khẩu không đúng, Vui lòng kiếm tra lại!');
        }
    }

    public function Register()
    {
        return view('home.register');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request,
            [
                'username' =>'min:6|max:30',
                'email'=>'email',
                'password'=>'min:5|max:20'
            ],
            [
                'username.max'=>'Họ tên của bạn phải nhỏ hơn 30 kí tự',
                'username.min'=>'Họ tên của bạn phải lớn hơn 6 kí tự',
                'email.email'=>'Eamail không đúng định dạng',
                'password.min'=>'Mật khẩu phải lớn hơn 6 kí tự',
            ]);
        $user = new User;
        if (User::where('email', '=', $request->email)->count() > 0) {
           return redirect()->back()->with('thongbao','Email đã được đăng kí, Vui lòng kiếm tra lại!');
        }
        $user->full_name = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->address = $request->address;
        $user->remember_token = $request->_token;
        $user->type_use = '0';
        $user->bixoa = '0';
        $user->save();
        return redirect()->route('trang-chu');
    }

    public function Logout()
    {
        Auth::logout();
        return redirect()->route('trang-chu');  
    }

    public function getContact(){
        return view('home.contact');
    }

    public function getTypeWomen($sex){
        $productswomen = Products::where('sex', '=', $sex)->paginate(3);
        return view('home.type-products',compact('productswomen'));
    }

    public function getCheckOut(){
        return view('home.checkout');
    }

    public function getAddCall(Request $request){
        $id = $request->id;
        $productsCall = Products::find($id);
        $oldCall = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCall);
        $cart->add($productsCall, $id);
        $request->session()->put('cart', $cart);
        return view('home.headercart');
    }

    public function postDeleteItemCart($id){
        //$id = $request->id;
        $oldCall = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCall);
        $cart->removeItem($id);
        Session::put('cart',$cart);
        if(Session::get('cart')->totalQty == 0){
        Session::forget('cart');
        }
        //return view('home.deleteitem');
        return redirect()->back();
    }

    public function postCheckout(Request $request){
        $this->validate($request,
            [
                'name' =>'required|min:6|max:30',
                'email'=>'required|email',
                'address'=>'required|min:5|max:200'
            ],
            [
                'name.required' => 'Họ tên không được trống',
                'name.max'=>'Họ tên của bạn phải nhỏ hơn 30 kí tự',
                'name.min'=>'Họ tên của bạn phải lớn hơn 6 kí tự',
                'email.email'=>'Eamail không đúng định dạng',
                'email.required' => 'Email không được trống',
                'address.required' => 'Địa chỉ không được trống',
                'address.min'=>'Địa chỉ phải lớn hơn 6 kí tự',
                'address.max'=>'Địa chỉ phải nhỏ hơn 200 kí tự',
            ]);
        $cart = session::get('cart');
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->gender = 1;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->phone_number = $request->phone1;
        $customer->note = $request->note;
        $customer->save();

        $bill = new Bill();
        $bill->id_customer = $customer->id;
        $bill->date_order = date('Y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->payment = 'ATM';
        $bill->note = $request->note;
        $bill->status = 0;
        $bill->save();
        foreach ($cart->items as $key => $value) {
            $bill_detail = new BillDetail;
            $bill_detail->id_bill = $bill->id;
            $bill_detail->id_product = $key;
            $bill_detail->quantity = $value['qty'];
            $bill_detail->unit_price = $value['price']/$value['qty'];
            $bill_detail->save();
        }
        Session::forget('cart');
        return redirect()->back()->with('thongbao','Đặt Hàng Thành Công !');
    }

    //send mail
    public function addFeedback(Request $request)
    {
        $input = $request->all();
        Mail::send('home.sendemail', array('name'=>$input["name"],'email'=>$input["email"], 'content'=>$input['comment']), function($message){
            $message->to('nbthong2201@gmail.com', 'Visitor')->subject('Visitor Feedback!');
        });
        Session::flash('flash_message', 'Send message successfully!');
        return view('form');
    }
}
?>