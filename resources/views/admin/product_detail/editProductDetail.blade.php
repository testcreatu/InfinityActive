@extends('admin.admin-master')

@section('content')

<div class="col-md-12 ">
	<div class="portlet light bordered">
	    <div class="portlet-title">
	        <div class="caption">
	            <i class="icon-settings font-dark"></i>
	            <span class="caption-subject font-dark sbold uppercase">Edit Products</span>
	        </div>
	    </div>
	    <div class="portlet-body form">
	        <form class="form-horizontal" role="form" action="{{url('admin/vendor-information-update/'.$product['id'])}}" method="post">
	        	@csrf
	            <div class="form-body">
	                <div class="form-group">
	                    <label class="col-md-3 control-label">Name</label>
	                    <div class="col-md-3">
	                    	@if($product['product_name'] != 'Others')
	                        <input type="text" name="product_name" class="form-control" value="{{$product['product_name']}}">
	                        @else
	                        <input type="text" name="product_other_name" class="form-control" value="{{$product['product_other_name']}}">
	                        @endif
	                        <div style="color: red;">{{$errors->first('product_name')}}</div>
	                        <div style="color: red;">{{$errors->first('product_other_name')}}</div>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-3 control-label">Model Number</label>
	                    <div class="col-md-3">
	                        <input type="text" name="model_number" class="form-control" value="{{$product['model_number']}}">
	                        <div style="color: red;">{{$errors->first('model_number')}}</div>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-3 control-label">Size</label>
	                    <div class="col-md-3">
	                        <input type="text" name="size" class="form-control" value="{{$product['size']}}">
	                        <div style="color: red;">{{$errors->first('size')}}</div>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-3 control-label">Quantity</label>
	                    <div class="col-md-3">
	                        <input type="number" name="quantity" class="form-control" value="{{$product['quantity']}}">
	                        <div style="color: red;">{{$errors->first('quantity')}}</div>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-3 control-label">Color</label>
	                    <div class="col-md-3">
	                        <input type="text" name="color" class="form-control" value="{{$product['color']}}">
	                        <div style="color: red;">{{$errors->first('color')}}</div>
	                    </div>
	                </div>
	                
	            </div>


	            <div class="form-actions">
	                <div class="row">
	                    <div class="col-md-offset-3 col-md-9">
	                        <button type="submit" class="btn green">Submit</button>
	                        <button type="button" class="btn default"><a href="{{url('admin/vendor-information')}}" style="text-decoration: none; color: white;">Cancel</a></button>
	                    </div>
	                </div>
	            </div>
	        </form>
	    </div>
	</div>
</div>

@endsection