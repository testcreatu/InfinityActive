@extends('home-master')



@section('content')

<div class="form-step mt-5">
	<div class="container">
		<div class="col">
			<div class="wrapper">
				<form action="" class="wizard">
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
									<input type="text" class="form-control datepicker-here" data-language='en' data-date-format="dd - mm - yyyy" id="dp1">
								</div>
							</div>
							<div class="form-group col-md-6">
								<label for="">
									Order No
								</label>
								<div class="form-holder">
									<i class="zmdi zmdi-spellcheck"></i>
									<input type="text" class="form-control">
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
									<select name="" id="" class="form-control">
										<option value="Maharajgunj" class="option">Maharajgunj</option>
										<option value="Naxal" class="option">Naxal</option>
										<option value="Boudha" class="option">Boudha</option>
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
									<select name="" id="" class="form-control">
										<option value="Trousers" class="option">Men</option>
										<option value="Half Pants" class="option">Women</option>
									</select>
									<i class="fas fa-chevron-down"></i>
								</div>
							</div>
							<div class="form-group col-md-6">
								
							</div>
						</div>
						<!-- <div class="form-row">
							<div class="form-group col-md-6">
								<label for="">
									Mens
								</label>
								<div class="form-holder">
									<i class="zmdi zmdi-account-o"></i>
									<select name="" id="" class="form-control">
										<option value="Trousers" class="option">Trousers</option>
										<option value="Half Pants" class="option">Half Pants</option>
										<option value="Jackets" class="option">Jackets</option>
										<option value="Others" class="option">Others</option>
									</select>
									<i class="fas fa-chevron-down"></i>
								</div>
								<div class="form-holder mt-4">
									<span>If other, type discription of Clothing Type for Men</span>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="form-group col-md-6">
								<label for="">
									Womens
								</label>
								<div class="form-holder">
									<i class="zmdi zmdi-account-o"></i>
									<select name="" id="" class="form-control">
										<option value="Sets" class="option">Sets</option>
										<option value="Cpas" class="option">Cpas</option>
										<option value="T-Shirts" class="option">T-Shirts</option>
										<option value="Others" class="option">Others</option>
									</select>
									<i class="fas fa-chevron-down"></i>
								</div>
								<div class="form-holder mt-4">
									<span>If other, type discription of Clothing Type for Women</span>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="form-group col-md-6">
								<label for="">
									Model Number
								</label>
								<div class="form-holder">
									<i class="zmdi zmdi-account-o"></i>
									<select name="" id="" class="form-control">
										<option value="01" class="option">01</option>
										<option value="02" class="option">02</option>
										<option value="03" class="option">03</option>
									</select>
									<i class="fas fa-chevron-down"></i>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="">
									Size
								</label>
								<div class="form-holder">
									<i class="zmdi zmdi-email"></i>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="form-group col-md-6">
								<label for="">
									Color
								</label>
								<div class="form-holder">
									<i class="zmdi zmdi-smartphone-android"></i>
									<input type="text" class="form-control">
								</div>
								<div class="form-holder mt-4">
									<span>Type Color Name</span>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="form-group col-md-6">
								<label for="">
									Quantity
								</label>
								<div class="form-holder">
									<i class="zmdi zmdi-smartphone-android"></i>
									<input type="text" class="form-control">
								</div>
							</div>
						</div> -->
						<div id="repeater">
							<!-- Repeater Heading -->
							<div class="repeater-heading mb-4">
								<a href="#">
									<span class="btn btn-primary repeater-add-btn">
										Add
									</span>
								</a>
							</div>
							<!-- Repeater Items -->
							<div class="items" data-group="test">
								<!-- Repeater Items Here -->
								<!-- Repeater Content -->
								<div class="item-content student-repeater-content">
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="">
												Mens
											</label>
											<div class="form-holder">
												<i class="zmdi zmdi-account-o"></i>
												<select name="" id="" class="form-control">
													<option value="Trousers" class="option">Trousers</option>
													<option value="Half Pants" class="option">Half Pants</option>
													<option value="Jackets" class="option">Jackets</option>
													<option value="Others" class="option">Others</option>
												</select>
												<i class="fas fa-chevron-down"></i>
											</div>
											<div class="form-holder mt-4">
												<span>If other, type discription of Clothing Type for Men</span>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group col-md-6">
											<label for="">
												Womens
											</label>
											<div class="form-holder">
												<i class="zmdi zmdi-account-o"></i>
												<select name="" id="" class="form-control">
													<option value="Sets" class="option">Sets</option>
													<option value="Cpas" class="option">Cpas</option>
													<option value="T-Shirts" class="option">T-Shirts</option>
													<option value="Others" class="option">Others</option>
												</select>
												<i class="fas fa-chevron-down"></i>
											</div>
											<div class="form-holder mt-4">
												<span>If other, type discription of Clothing Type for Women</span>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="">
												Model Number
											</label>
											<div class="form-holder">
												<i class="zmdi zmdi-account-o"></i>
												<select name="" id="" class="form-control">
													<option value="01" class="option">01</option>
													<option value="02" class="option">02</option>
													<option value="03" class="option">03</option>
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
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="">
												Color
											</label>
											<div class="form-holder">
												<i class="zmdi zmdi-smartphone-android"></i>
												<input type="text" class="form-control">
											</div>
											<div class="form-holder mt-4">
												<span>Type Color Name</span>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group col-md-6">
											<label for="">
												Quantity
											</label>
											<div class="form-holder">
												<i class="zmdi zmdi-smartphone-android"></i>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-md-6 pull-right repeater-remove-btn">
										<button id="remove-btn" class="btn btn-danger" onclick="$(this).parents('.items').remove()">
											Remove
										</button>
									</div>
								</div>
							</div>
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
									<select name="" id="" class="form-control">
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
									<select name="" id="" class="form-control">
										<option value="18-24" class="option">18-24</option>
										<option value="25-34" class="option">25-34</option>
									</select>
									<i class="fas fa-chevron-down"></i>
								</div>
							</div>
						</div>
					</section>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection