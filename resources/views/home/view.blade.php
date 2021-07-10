@extends('home-master')



@section('content')


<div class="form-step mt-5">
    <div class="container">
        <div class="col wrapper">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered card-circle">
            <div class="portlet-title">
                
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
                <form method="post" action="">

                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Product Name</th>
                                <th>Branch</th>
                                <th>Gender</th>
                                <th>Quantity</th>
                                <th>Color</th>
                                <th>Size</th>
                                <th>Model Number</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>

                                <th>S.No</th>
                                <th>Product Name</th>
                                <th>Branch</th>
                                <th>Gender</th>
                                <th>Quantity</th>
                                <th>Color</th>
                                <th>Size</th>
                                <th>Model Number</th>
                            </tr>
                        </tfoot>
                        <tbody>
                           @foreach($product as $pro)
                           <tr>
                                <td>{{$loop->iteration}}</td>
                                @if($pro['product_name'] == 'Others')
                                <td>{{$pro['product_other_name']}}</td>
                                @else
                                <td>{{$pro['product_name']}}</td>
                                @endif

                                <td>{{$pro['branch']}}</td>
                                <td>{{$pro['gender']}}</td>
                                <td>{{$pro['quantity']}}</td>
                                <td>{{$pro['color']}}</td>
                                <td>{{$pro['size']}}</td>
                                <td>{{$pro['model_number']}}</td>
                            </tr>
                           @endforeach

                            
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
</div>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('#ckbutton').hide();
        $(function () {
            $('#ckbutton').hide();
            $('input[name="checkbox[]"]').on('click', function () 
            {
                if ($('input[name="checkbox[]"]:checked').length) {
                    $('#ckbutton').fadeIn();
                } else {
                    $('#ckbutton').hide();
                }
            });
        });
    });
</script>

<style>
    .portlet.light .dataTables_wrapper .dt-buttons {
        margin:0 0 20px 0;
    }
    
    .caption-subject.active a {
        box-shadow: 0px 0px 3px 0px rgb(0 0 0 / 50%);
        padding: 5px;
        border-radius:5px !important;
        color: #32c5d2!important;
    }
    
    .caption-subject a {
        color:#b2e4e8 !important;
    }
    
    .caption-subject a:hover {
        text-decoration:none;
        color: #32c5d2!important;
    }
</style>

@endsection