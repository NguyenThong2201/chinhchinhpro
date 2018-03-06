<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ProductsType;
use App\Cart;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('page.header',function($view){
        $type_products_women = ProductsType::where('sex','=','nu')->get();
        $view->with('type_products_women',$type_products_women);
        });
        view()->composer('page.header',function($view){
        $type_products_man = ProductsType::where('sex','=','nam')->get();
        $view->with('type_products_man',$type_products_man);
        });
        view()->composer('home.checkout',function($view){
            if(Session('cart')) {
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
