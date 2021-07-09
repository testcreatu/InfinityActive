<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Page Title -->
    <title>Page title</title>


    <!-- FavIcon Link -->
    <link rel="icon" type="image/ico" href="{{url('public/favicon.ico')}}">


    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="description" content="">
    <meta name="keywords" content="">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('public/css/bootstrap.min.css')}}">

    <!-- fontawesome css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <link rel="stylesheet" href="{{url('public/css/datepicker.min.css')}}">

    <!-- Global CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('public/css/style.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <!-- Jquery 1.9.1 -->
    <script type="text/javascript" src="{{url('public/js/jquery-1.9.1.min.js')}}"></script>




</head>

<body>

<div>
	<!-- @include('header.header') -->
</div>

<div style="min-height: 50vh">
	@yield('content')
</div>

<div>
	<!-- @include('footer.footer') -->
</div>
	
</body>

<!-- Popper, Boostrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script type="text/javascript" src="{{url('public/js/bootstrap.min.js')}}"></script>



<!-- Global JS -->
<script type="text/javascript" src="{{url('public/js/js.js')}}"></script>

<!-- <script src="{{url('public/js/jquery-3.3.1.min.js')}}"></script> -->
        
<!-- JQUERY STEP -->
<!-- <script src="{{url('public/js/jquery.steps.js')}}"></script> -->

<!-- DATE-PICKER -->
<script src="{{url('public/js/datepicker.js')}}"></script>
<script src="{{url('public/js/datepicker.en.js')}}"></script>

<!-- <script src="{{url('public/js/main.js')}}"></script> -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" 
        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" 
        crossorigin="anonymous">
</script>
<script src="{{url('public/js/repeater.js')}}"></script>
<script>
    $(function(){

  $("#repeater").createRepeater();

});
</script>
</html>