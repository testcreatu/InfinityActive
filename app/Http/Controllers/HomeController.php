<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VendorProductDetail;
use App\Branch;
use App\ModelNumber;

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
        return view('home.home', compact('branch', 'model_number', 'order_no'));
    }
}
