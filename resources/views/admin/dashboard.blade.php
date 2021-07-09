@extends('admin.admin-master')

@section('content')
<div class="center-flex">
	<div class="mt-5" style="height:400px; width:450px; overflow: hidden; text-align: center;">
		<img src=" {{url('public/images/logo.jpg')}}" style="height: 100%; width: 100%; object-fit: cover;">
	</div>
</div>

<style type="text/css">
	.center-flex {
		display: flex;
		justify-content: center;
		align-items: center;
		height: 600px;
		border-width: 5px;
	}
</style>

@endsection