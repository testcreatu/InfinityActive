@extends('admin.admin-master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> Vendor Detail </span>
                </div>
            </div>
            <div class="portlet-body">
                {{--<div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <button id="sample_editable_1_new" class="btn sbold green"><a href="{{url('admin/add-branch')}}" style="text-decoration: none; color: white;">Add New <i class="fa fa-plus"></i></a> 
                                </button>
                            </div>
                        </div>
                    </div>
                </div>--}}
                @if(Session::has('message'))
                <p class="alert alert-info">{{ Session::get('message') }}</p>
                @endif
                @if(Session::has('msg'))
                <p class="alert alert-danger">{{ Session::get('msg') }}</p>
                @endif
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    <thead>
                        <tr>
                            <th>
                                SN
                            </th>
                            <th> Vendor Name </th>
                            <th> Product Name </th>
                            <th> Gender </th>
                            <th> Order Date </th>
                            <th> Branch </th>
                            <th> Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                    	@foreach($products as $product)
                        <tr class="odd gradeX">
                            <td>
                                {{$loop->iteration}}
                            </td>
                            <td> {{$product['vendor_name']}} </td>
                            @if($product['product_name'] != 'Others')
                            <td> {{$product['product_name']}} </td>
                            @else
                            <td> {{$product['product_other_name']}} </td>
                            @endif
                            
                            <td> {{$product['gender']}} </td>
                            <td> {{$product['date']}} </td>
                            <td> {{$product['branch']}} </td>
                            <td>
                                <button class="btn btn-xs green"><a href="{{url('admin/vendor-information-edit/'.$product['product_id'])}}" style="color: white; text-decoration: none;"><i class="fa fa-edit"></i>Edit</a></button>&nbsp;&nbsp; 
                                <button class="btn btn-xs red"><a onclick="return confirm('Are you sure?')" href="{{url('admin/vendor-information-delete/'.$product['product_id'])}}" style="color: white; text-decoration: none;"><i class="fa fa-trash"></i>Delete</a></button> 
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>

@endsection