@extends('layouts.app')

@section('content')
<!doctype html>
<html>
<body>

<h2>Schools</h2>

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



</body>
</html>
@endsection
