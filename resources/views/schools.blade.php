@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<body>

<h1>Schools</h1>

<div id="map" style="width:100%;height:500px"></div>

<script>
function myMap() {
	var mapCanvas = document.getElementById("map");
	var mapOptions = {
		center: new google.maps.LatLng(28.5383, -81.3792),
		zoom: 10
	}
	var map = new google.maps.Map(mapCanvas, mapOptions);

	}
	var tfaMarker = new google.maps.Map(mapCanvas, mapOptions)

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAd3ur1TeWT0Yrugn7eUjLw1091lCZ1OxY&callback=myMap"></script>

</body>
</html>
@endsection
