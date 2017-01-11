@extends('layouts.app')

@section('content')

 <div class="carousel">
    <a class="carousel-item" href="#"><img src="https://s5.postimg.org/vy02d5mdv/kids1.png"></a>
    <a class="carousel-item" href="#"><img src="https://s5.postimg.org/ijmzh4fpv/kids3.png"></a>
    <a class="carousel-item" href="#"><img src="https://s5.postimg.org/5usoxg9lf/kids5.png"></a>
</div>
</br>

<div class="row">
	<div class="col-lg-12 text-center">
		<h5>
		Welcome to Asia-America Student Placement! Here at AASP we provide information to prospective, potential students or parents of those students about schools in the Orlando, Florida area that are apart of the Student and Exchange Visitor Program (SEVP). Also we provide a list of potential consultants that you may want to use that will work with you and with the schools in order to make for a smooth transition.
		</h5>
	</div>
</div>

<script> 
//Runs the carousel
$(document).ready(function(){
	$('.carousel').carousel();
});

</script>

@endsection