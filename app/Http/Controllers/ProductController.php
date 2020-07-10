<?php

namespace App\Http\Controllers;

use App\Product;
use App\Product_Add_Ons;
use Illuminate\Http\Request;
use Session;


class ProductController extends Controller
{
    public function products(){
        $products = Product::all();
        return view('shop-grid',['products'=>$products]);
    }
    public function singleproduct($id){
        $product = Product::find($id);
        $pro_id = $product->product_id;
        $add_ons = Product_Add_Ons::with('products')->get();
        // dd($add_ons);
        return view('single-product',['product'=> $product, 'addons' => $add_ons]);
    }
    public function bookingProduct(Request $request){
            return request()->all();
        // $id = $request->input('proid');
        // $controller_price = $request->checkbox1;
        // $pro = Product::find($id);
        // $pro_id = $pro->product_id;

        // $add_ons = Product_Add_Ons::where('product_id',$pro_id)->get();
        // dd($controller_price);
        // $amount = $request->amount;
        // $addon1 = $request->addon1;
        // session(['amount' => $amount,
        //         'addon1' => $addon1,
        //         'product_name' => $pro_name, 
        // ]);
        // return \Response::json(['success'=>$addon1]);
        // return view('single-product',['add-on'=>$add_ons]);
    }
    public function bookingCart(){
        // $product = session('amount');
        return view('booking-cart');
    }
}
