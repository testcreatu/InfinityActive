@extends('admin.admin-master')

@section('content')

<div class="col-md-12 ">
	<div class="portlet light bordered">
	    <div class="portlet-title">
	        <div class="caption">
	            <i class="icon-settings font-dark"></i>
	            <span class="caption-subject font-dark sbold uppercase">Add Vendor</span>
	        </div>
	    </div>
	    <div class="portlet-body form">
	        <form class="form-horizontal" role="form" action="{{url('admin/save-vendor')}}" method="post">
	        	@csrf
	            <div class="form-body">
	                <div class="form-group">
	                    <label class="col-md-3 control-label">Name</label>
	                    <div class="col-md-6">
	                        <input type="text" name="name" class="form-control" placeholder="Enter Vendor Name" value="{{old('name')}}">
	                        <div style="color: red;">{{$errors->first('name')}}</div>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-3 control-label">Email</label>
	                    <div class="col-md-6">
	                        <input type="text" name="email" class="form-control" placeholder="Enter Vendor Email" value="{{old('email')}}">
	                        <div style="color: red;">{{$errors->first('email')}}</div>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-3 control-label">Password</label>
	                    <div class="col-md-6">
	                        <input type="password" name="password" class="form-control" placeholder="Enter Vendor Password" value="{{old('password')}}">
	                        <div style="color: red;">{{$errors->first('password')}}</div>
	                    </div>
	                </div>
	                <div class="form-group">
                        <label class="control-label col-md-3">Role</label>
                        <div class="col-md-4">
                            <select class="bs-select form-control" name="role">
                                <option value="1">Admin</option>
                                <option value="2">Vendor</option>
                            </select>
                            <div style="color: red;">{{$errors->first('role')}}</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Status</label>
                        <div class="input-group">
                            <div class="icheck-list">
                                <label>
                                    <input type="radio" name="status" class="icheck" checked value="1"> Active </label>
                                <label>
                                    <input type="radio" name="status" class="icheck" value="0"> Inactive </label>
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