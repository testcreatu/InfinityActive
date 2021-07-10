@extends('home-master')



@section('content')

<div class="form-step mt-5">
	<div class="container">
		<div class="col">
			<div class="wrapper">
				<form action="{{url('save-product')}}" class="wizard" method="post">
					@csrf
					<!-- SECTION 1 -->
					<h4></h4>
					<section>
						<h3>INFINITY ACTIVEWEARS</h3>
						<h5 class>LIVE TO BE</h5>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="">
									Date of Order
								</label>
								<div class="form-holder">
									<i class="far fa-calendar-alt"></i>
									<input type="text" class="form-control datepicker-here" data-language='en' data-date-format="dd - mm - yyyy" id="dp1" name="date" value="<?php echo(Carbon\Carbon::now()->toDateString());  ?>" disabled>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label for="">
									Order No
								</label>
								<div class="form-holder">
									<i class="zmdi zmdi-spellcheck"></i>
									<input type="text" class="form-control" value="{{$order_no}}" name="order_no" disabled>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="">
									Branch
								</label>
								<div class="form-holder">
									<i class="zmdi zmdi-account-o"></i>
									<select name="branch" id="" class="form-control">
										@foreach($branch as $b)
										<option value="{{$b['branch_name']}}" class="option">{{$b['branch_name']}}</option>
										@endforeach
									</select>
									<i class="fas fa-chevron-down"></i>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label for="">
									Gender
								</label>
								<div class="form-holder">
									<i class="zmdi zmdi-account-o"></i>
									<select name="gender" class="form-control" id="genderSelect1">
										<option selected="" disabled=""  class="option">----select Gender------</option>
										<option value="men" class="option">Men</option>
										<option value="women" class="option">Women</option>
									</select>
									<i class="fas fa-chevron-down"></i>
								</div>
							</div>
							<div class="form-group col-md-6">
								
							</div>
						</div>

						
						<div class="form-group mt-repeater" id="repeat" style="display: none;">
							<!-- Repeater Heading -->
							<div data-repeater-list="group-c">

                                <div data-repeater-item class="mt-repeater-item">

                                    <div class=" mt-repeater-row">

										<div class="form-row" id="gender-view" >

											<div class="form-group col-md-12" id="mens" style="display: none;" >
												<label for="">Mens</label>
												<div class="form-holder">
													<i class="zmdi zmdi-account-o"></i>
														<select name="product_name_m" id="" onchange="getval(this);" class="form-control">
															<option value="Trousers" class="option">Trousers</option>
															<option value="Half Pants" class="option">Half Pants</option>
															<option value="Jackets" class="option">Jackets</option>
															<option value="Others" onselect="myFunction()" class="option">Others</option>
														</select>
														<i class="fas fa-chevron-down"></i>
												</div>
											</div>

											<div class="form-group col-md-12" id="womens" style="display: none;">
												<label for="">Womens</label>
												<div class="form-holder">
													<i class="zmdi zmdi-account-o"></i>
													<select name="product_name_w" id="" onchange="getval(this);" class="form-control">
														<option value="Sets" class="option">Sets</option>
														<option value="Cpas" class="option">Cpas</option>
														<option value="T-Shirts" class="option">T-Shirts</option>
														<option value="Others" onselect="myFunction()" class="option">Others</option>
													</select>
													<i class="fas fa-chevron-down"></i>
												</div>
											</div>
										</div>

										<div class="form-row" id="gender-view-other" >
										</div>

										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="">
													Model Number
												</label>
												<div class="form-holder">
													<i class="zmdi zmdi-account-o"></i>
													<select name="model_number" id="" class="form-control">
														@foreach($model_number as $m)
														<option value="{{$m['model_number']}}" class="option">{{$m['model_number']}}</option>
														@endforeach
													</select>
													<i class="fas fa-chevron-down"></i>
												</div>
											</div>
											<div class="form-group col-md-6">
												<label for="">
													Size
												</label>
												<div class="form-holder">
													<i class="zmdi zmdi-email"></i>
													<input type="text" class="form-control" name="size" value="{{old('size')}}" required>
												</div>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="">
													Color
												</label>
												<div class="form-holder">
													<i class="zmdi zmdi-smartphone-android" value={{old('color')}}></i>
													<input type="text" class="form-control" name="color" required>
												</div>
												{{--<div class="form-holder mt-4">
													<span>Type Color Name</span>
													<input type="text" class="form-control">
												</div>--}}
											</div>
											<div class="form-group col-md-6">
												<label for="">
													Quantity
												</label>
												<div class="form-holder">
													<i class="zmdi zmdi-smartphone-android"></i>
													<input type="number" class="form-control" name="quantity" required="">
												</div>
											</div>
										</div>
										
										<a href="javascript:;" data-repeater-delete class="btn btn-danger mt-repeater-delete" style="margin-bottom: 20px">
                                                <i class="fa fa-close"></i>Delete</a>
									</div>
								</div>
							</div>
							<a href="javascript:;" data-repeater-create class="btn btn-info mt-repeater-add" id="addProduct">
                                <i class="fa fa-plus"></i> Add Product Variation</a>
                        </div>

						<hr>

						<h3>Customer Detail</h3>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="">
									Customer Gender
								</label>
								<div class="form-holder">
									<i class="zmdi zmdi-account-o"></i>
									<select name="customer_gender" id="" class="form-control">
										<option value="Men" class="option">Men</option>
										<option value="Women" class="option">Women</option>
									</select>
									<i class="fas fa-chevron-down"></i>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label for="">
									Customer Age Range
								</label>
								<div class="form-holder">
									<i class="zmdi zmdi-account-o"></i>
									<select name="customer_age" id="" class="form-control">
										<option value="18-24" class="option">18-24</option>
										<option value="25-34" class="option">25-34</option>
									</select>
									<i class="fas fa-chevron-down"></i>
								</div>
							</div>
						</div>
					</section>
					<button class="btn btn-primary" type="Submit">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
    $(document).ready(function () {

    $("#genderSelect1").change(function () {
    	
    	if($(this).val() == 'men'){
    		$("#repeat").css('display','block');
    	$("#mens").css('display', 'block');
    	$("#womens").css('display', 'none');
    	}
    	else
    	{
    		$("#repeat").css('display','block');
    		$("#womens").css('display', 'block');
    		$("#mens").css('display', 'none');
    	}
    });
});

</script>
@endsection