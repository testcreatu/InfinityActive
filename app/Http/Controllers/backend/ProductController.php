<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function save(Request $request)
    {
    	dd($request);
    	$product = new VendorProductDetail;
    	$product->uuid = $this->generateUuid;
    	$product->vendor_id = Auth::guard('web')->user()->id;
    	$product->date = $request['date'];
    	$product->order_no = $request['order_no'];
    	$product->branch = $request['branch'];
    	$product->gender = $request['gender'];

    	$productDetail = new Product;
    	$productDetail->vendor_product_detail_id = $product['id'];
    	$productDetail->product_name = $request['product_name'];

    }

    public function generateUuid()
	{
		$uuid = Str::uuid()->toString().mt_rand(5, 100000);
		$checkuuid = VendorProductDetail::where('uuid',$uuid)->get()->first();
		if (!empty($checkuuid)) {
			$this->generateUuid();
		}
		else
		{
			return $uuid;
		}
	}
}
