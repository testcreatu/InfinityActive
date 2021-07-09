<?php

namespace App\BackendRepository\VendorRepository;

use App\BackendRepository\ValidationRepository\ValidationRepository;
use App\BackendRepository\UuidRepository\UuidRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class SaveVendorRepository extends Controller
{
	protected $validate = null;
	protected $uuid = null;

	public function __construct(ValidationRepository $validate, UuidRepository $uuid)
	{
		$this->validate = $validate;
		$this->uuid = $uuid;
	}

	public function saveVendor($request)
	{
		$this->validate->validateName($request);
		$this->validate->validateEmail($request);
		$this->validate->validatePassword($request);
		$this->validate->validateRole($request);
		$this->validate->validateStatus($request);

		$vendor = new User;
		$vendor->uuid = $this->uuid->generateUuid('users');
		$vendor->role_id = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['role']);
		$vendor->name = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name']);
		$vendor->email = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['email']);
		$vendor->password = Hash::make($request['password']);
		$vendor->status = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['status']);

		$vendor->save();


	}

	public function updateVendor($request, $vendor_uuid)
	{
		$vendor = User::where('uuid', $vendor_uuid)->get()->first();
		$this->validate->validateName($request);
		$this->validate->validateUpdateEmail($request, $vendor['id']);
		if (!empty($request['password'])) {
			$this->validate->validatePassword($request);
		}
		$this->validate->validateRole($request);
		$this->validate->validateStatus($request);

		
		$vendor->role_id = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['role']);
		$vendor->name = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name']);
		$vendor->email = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['email']);
		if (!empty($request['password'])) {
			$vendor->password = Hash::make($request['password']);
		}
		$vendor->status = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['status']);
		$vendor->save();
	}
}