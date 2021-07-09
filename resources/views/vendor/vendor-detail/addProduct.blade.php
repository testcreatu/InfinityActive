<form action="#">
	<label for="fname">Date:</label><br>
	<input type="text" name="date" value="<?php echo(Carbon\Carbon::now()->toDateString());  ?>" disabled><br>
	<label for="lname">Order_no:</label><br>
	<input type="text" name="order_no"><br><br>
	<label>Branch</label>
	<select class="bs-select form-control" name="branch">
		<option value="1">Branch1</option>
		<option value="2">Branch2</option>
	</select>
	<div style="color: red;">{{$errors->first('branch')}}</div>
	<label>Gender</label>
			<label>
				<input type="radio" name="gender" value="male"> Male </label>
				<label>
					<input type="radio" name="gender" value="female"> Female </label>
				<label>
					<input type="radio" name="gender" value="other"> Other </label>
				
			<div style="color: red;">{{$errors->first('gender')}}</div>
	<label>Men</label>
			<label>
				<input type="radio" name="men" value="trousers"> Trousers </label>
				<label>
					<input type="radio" name="men" value="half_pants"> Half pants </label>
				<label>
					<input type="radio" name="men" value="other"> Other </label>
				
			<div style="color: red;">{{$errors->first('men')}}</div>
	<label for="lname">If Other:</label><br>
	<input type="text" name="extra_men"><br><br>
	<label>Women</label>
			<label>
				<input type="radio" name="women" value="leggings"> Leggings </label>
				<label>
					<input type="radio" name="women" value="trousers"> Trousers </label>
				<label>
					<input type="radio" name="women" value="other"> Other </label>
				
			<div style="color: red;">{{$errors->first('women')}}</div>
	<label for="lname">If Other:</label><br>
	<input type="text" name="extra_women"><br><br>
	<label>Mobile</label>
	<select class="bs-select form-control" name="branch">
		<option value="1">num1</option>
		<option value="2">num2</option>
	</select>
	<label>Size</label>
			<label>
				<input type="radio" name="size" value="s"> S </label>
				<label>
					<input type="radio" name="size" value="m"> M </label>
				<label>
					<input type="radio" name="size" value="l"> L </label>
				
			<div style="color: red;">{{$errors->first('size')}}</div>
	<label>Colour</label>
	<select class="bs-select form-control" name="color">
		<option value="1">colour1</option>
		<option value="2">colour2</option>
	</select>
	<label for="lname">Color name:</label><br>
	<input type="text" name="color_name"><br><br>
	<label for="lname">Quantity:</label><br>
	<input type="text" name="quantity"><br><br>



	<input type="submit" value="Submit">
</form> 