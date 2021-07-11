<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VendorProductDetail;
use App\Branch;
use App\ModelNumber;
use App\Product;
use App\CustomerDetail;
use Session;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function form()
    {
        $order_no = 1;
        $branch = Branch::all();
        $model_number = ModelNumber::all();
        $order = VendorProductDetail::where('date', \Carbon\Carbon::now()->toDateString())->orderBy('id', 'desc')->get()->first();
        if (empty($order)) {
            $order_no = 1;
        }
        else
        {
            $order_no= $order['order_no'] + 1;
        }

        return view('home.form', compact('branch', 'model_number', 'order_no'));
        
    }


    public function viewProduct()
    {
        if(Auth::guard()->check())
        { 
            $product = VendorProductDetail::join('products','vendor_product_details.id','products.vendor_product_detail_id')
                ->where('vendor_product_details.vendor_id' ,Auth::guard('web')->user()->role_id)
                ->select('vendor_product_details.order_no','vendor_product_details.branch','products.product_name','products.product_other_name','products.model_number','products.size','products.quantity','products.color')->get();
            return view('home.view',compact('product'));
        }
        else
        {
            Session::flush();
            return redirect('/');
        }
    }
}
