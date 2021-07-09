<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BackendRepository\VendorRepository\SaveVendorRepository;
use App\User;
use Carbon\Carbon;

class VendorController extends Controller
{
	protected $saveVendor = null;

	public function __construct(SaveVendorRepository $saveVendor)
	{
		$this->saveVendor = $saveVendor;
	}

    public function add()
    {
    	return view('admin.vendor.addVendor');
    }

    public function save(Request $request)
    {
    	$this->saveVendor->saveVendor($request);
    	return redirect('admin/vendor')->with('message','Added Successfully');
    }

    public function view()
    {
    	$vendors = User::join('roles','users.role_id','=','roles.id')
    				->where('role_id', 2)
    				->where('status', 1)
    				->where('deleted_at', Null)
    				->select('users.name as name','users.email as email','roles.role_name as role_name','users.uuid as uuid')
    				->get();
    	return view('admin.vendor.vendor', compact('vendors'));
    }

    public function edit($vendor_uuid)
    {
        $vendor = User::where('uuid', $vendor_uuid)->get()->first();
        return view('admin.vendor.editVendor', compact('vendor'));
    }

    public function update(Request $request, $vendor_uuid)
    {
        $this->saveVendor->updateVendor($request, $vendor_uuid);
        return redirect('admin/vendor')->with('message','Updated Successfully');
    }

    public function delete($vendor_uuid)
    {
        $vendor = User::where('uuid', $vendor_uuid)->get()->first();
        $vendor->deleted_at = Carbon::now()->format('Y-m-d');
        $vendor->email = rand().'-'.$vendor['email'];
        $vendor->save();
        return redirect('admin/vendor')->with('msg','Deleted Successfully');
    }
}
