@extends('admin.admin-master')

@section('content')
<div class="col-md-12 ">
	<div class="portlet light bordered">
	    <div class="portlet-title">
	        <div class="caption">
	            <i class="icon-settings font-dark"></i>
	            <span class="caption-subject font-dark sbold uppercase">Edit Vendor</span>
	        </div>
	    </div>
	    <div class="portlet-body form">
	        <form class="form-horizontal" role="form" action="{{url('admin/update-vendor/'.$vendor['uuid'])}}" method="post">
	        	@csrf
	            <div class="form-body">
	                <div class="form-group">
	                    <label class="col-md-3 control-label">Name</label>
	                    <div class="col-md-6">
	                        <input type="text" name="name" class="form-control" placeholder="Enter Vendor Name" value="{{$vendor['name']}}">
	                        <div style="color: red;">{{$errors->first('name')}}</div>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-3 control-label">Email</label>
	                    <div class="col-md-6">
	                        <input type="text" name="email" class="form-control" placeholder="Enter Vendor Email" value="{{$vendor['email']}}">
	                        <div style="color: red;">{{$errors->first('email')}}</div>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-3 control-label">Password</label>
	                    <div class="col-md-6">
	                        <input type="password" name="password" class="form-control" placeholder="Enter Vendor Password">
	                        <div style="color: red;">{{$errors->first('password')}}</div>
	                    </div>
	                </div>
	                <div class="form-group">
                        <label class="control-label col-md-3">Role</label>
                        <div class="col-md-4">
                            <select class="bs-select form-control" name="role">
                                <option value="1" @if($vendor['role_id'] == 1) selected="" @endif>Admin</option>
                                <option value="2" @if($vendor['role_id'] == 2) selected="" @endif>Vendor</option>
                            </select>
                            <div style="color: red;">{{$errors->first('role')}}</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Status</label>
                        <div class="input-group">
                            <div class="icheck-list">
                                <label>
                                    <input type="radio" name="status" class="icheck" value="1" <?php if($vendor['status'] == 1){echo "checked";} ?>> Active </label>
                                <label>
                                    <input type="radio" name="status" class="icheck" value="0" <?php if($vendor['status'] == 0){echo "checked";} ?>> Inactive </label>
                            </div>
                        </div>
                        <div style="color: red;">{{$errors->first('status')}}</div>
                    </div>
	            </div>


	            <div class="form-actions">
	                <div class="row">
	                    <div class="col-md-offset-3 col-md-9">
	                        <button type="submit" class="btn green">Submit</button>
	                        <button type="button" class="btn default"><a href="{{url('admin/vendor')}}" style="text-decoration: none; color: white;">Cancel</a></button>
	                    </div>
	                </div>
	            </div>
	        </form>
	    </div>
	</div>
</div>

@endsection