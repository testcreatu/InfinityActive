<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\VendorProductDetail;
use App\Product;

class VendorDetailController extends Controller
{
    public function view()
    {
    	$products = User::join('vendor_product_details','users.id','=','vendor_product_details.vendor_id')
    					->join('products','vendor_product_details.id','=','products.vendor_product_detail_id')
    					->join('customer_details','vendor_product_details.id','=','customer_details.vendor_product_detail_id')
    					->where('users.status', 1)
    					->select('users.name as vendor_name','users.email as vendor_email','vendor_product_details.date','vendor_product_details.branch','vendor_product_details.gender as gender','products.product_name as product_name','products.product_other_name as product_other_name','products.model_number as model_number','vendor_product_details.order_no as order_no','products.size as size','vendor_product_details.uuid as uuid','products.quantity as quantity','products.color as color','customer_details.gender as customer_gender','customer_details.age_range as age_range','products.id as product_id')
    					->get();
    	// dd($products);
    	return view('admin.product_detail.productDetail', compact('products'));
    }

    public function edit($id)
    {
    	$product = Product::where('id', $id)->get()->first();
    	return view('admin.product_detail.editProductDetail', compact('product'));

    }

    public function update(Request $request, $id)
    {
    	if (!empty($request['product_name'])) {
    		$request->validate([
    			'product_name'=>'required',
    		]);
    	}
    	else
    	{
    		$request->validate([
    			'product_other_name'=>'required',
    		]);
    	}
    	$request->validate([
    		'model_number'=>'required',
    		'size'=>'required',
    		'quantity'=>'required',
    		'color'=>'required',
    	]);
    	$product = Product::where('id', $id)->get()->first();
    	if (!empty($request['product_name'])) {
    		$product->product_name = $request['product_name'];
    	}
    	else
    	{
    		$product->product_other_name = $request['product_other_name'];
    	}
    	$product->model_number = $request['model_number'];
    	$product->size = $request['size'];
    	$product->quantity = $request['quantity'];
    	$product->color = $request['color'];
    	$product->save();
    	return redirect('admin/vendor-information')->with('message','Updated Successfully');
    }

    public function delete($id)
    {
    	$product = Product::where('id', $id)->get()->first();
    	$vendor_product = Product::where('vendor_product_detail_id', $product['vendor_product_detail_id'])->count();
    	if ($vendor_product == 1) {
    		$vendor_product_detail = VendorProductDetail::where('id', $product['vendor_product_detail_id'])->get()->first();
    		$vendor_product_detail->delete();
    	}
    	$product->delete();

    	return redirect('admin/vendor-information')->with('msg','Deleted Successfully');
    }
}
