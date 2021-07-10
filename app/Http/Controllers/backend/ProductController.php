<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\VendorProductDetail;
use App\Product;
use App\CustomerDetail;
use Str;
use Auth;
class ProductController extends Controller
{
    public function save(Request $request)
    {
        $this->validate($request,[
                'gender' => 'required',
                'branch' => 'required',
                'customer_gender' => 'required',
                'customer_age' => 'required',
            ]);

        $order_no = 1;
        $order = VendorProductDetail::where('date', \Carbon\Carbon::now()->toDateString())->orderBy('id', 'desc')->get()->first();
        if (empty($order)) {
            $order_no = 1;
        }
        else
        {
            $order_no= $order['order_no'] + 1;
        }

        if($request['gender'] == 'men' || $request['gender'] == 'women')
        {
            $product = new VendorProductDetail;
            $product->uuid = $this->generateUuid();
            // $product->vendor_id = Auth::guard('web')->user()->id;
            $product->vendor_id = 1;
            $product->date = \Carbon\Carbon::now()->toDateString();
            $product->order_no = $order_no;
            $product->branch = $request['branch'];
            $product->gender = $request['gender'];
            $product->save();

            $count = count($request['group-c']);
            for($i=0; $i < $count; $i++)
            {
                $productDetail = new Product;
                $productDetail->vendor_product_detail_id = $product['id'];

                if($request['gender'] == 'women')
                {

                    if($request['group-c'][0]['product_name_w'] == 'Others')
                    {
                        $productDetail->product_other_name = $request['group-c'][0]['product_other'];
                        $productDetail->product_name = $request['group-c'][0]['product_name_w']; 
                    }
                    else
                    {
                        $productDetail->product_name = $request['group-c'][$i]['product_name_w']; 
                    }
                    
                }
                else
                {
                    if($request['group-c'][0]['product_name_m'] == 'Others')
                    {
                        $productDetail->product_other_name = $request['group-c'][0]['product_other'];
                        $productDetail->product_name = $request['group-c'][0]['product_name_m'];
                    }
                    else
                    {
                        $productDetail->product_name = $request['group-c'][$i]['product_name_m'];
                    }

                }

                $productDetail->model_number = $request['group-c'][$i]['model_number']; 
                $productDetail->size = $request['group-c'][$i]['size']; 
                $productDetail->color = $request['group-c'][$i]['color']; 
                $productDetail->quantity = $request['group-c'][$i]['quantity'];
                $productDetail->save(); 
                
            }

            $customer = new CustomerDetail;
            $customer->vendor_product_detail_id = $product['id'];
            $customer->gender = $request['customer_gender'];
            $customer->age_range = $request['customer_age'];
            $customer->save();

            return redirect()->to('/view-product')->with('message','Product Added Succesfully');
        }
        else
        {
            return redirect()->back()->with('message','Error In Gender');
        }
    	
    	

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
