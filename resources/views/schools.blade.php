@extends('layouts.app')

@section('content')
<!doctype html>
<html>
<style>
	h3{
		text-align: center;

	}
</style>
<body>

<h3>Schools</h3>

<div id="map" style="width:100%;height:500px"></div>

<script>
function myMap() {
	var tfa = new google.maps.LatLng(28.5139, -81.4251);
	var geneva = new google.maps.LatLng(28.6122, -81.3108);
	var wp = new google.maps.LatLng(28.4769, -81.5688);
	var lhp = new google.maps.LatLng(28.5578, -81.3720);
	var pcca = new google.maps.LatLng(28.4632, -81.4010);

 	var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 11,
      center: new google.maps.LatLng(28.5383, -81.3792),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var tfamarker = new google.maps.Marker({
      position: tfa,
      url: 'http://www.thefirstacademy.org/',
      title: 'This link opens to The First Academy',
      map: map
    });

    var gsmarker = new google.maps.Marker({
      position: geneva,
      url: 'http://www.genevaschool.org/admission/apply-to-geneva/',
      title: 'This link opens to The Geneva School',
      map: map
    });

    var wpmarker = new google.maps.Marker({
      position: wp,
      url: 'http://www.nordangliaeducation.com/our-schools/florida/windermere-preparatory-school/admissions',
      title: 'This link opens to Windermere Prepartory School',
      map: map
    });
    var lhpmarker = new google.maps.Marker({
      position: lhp,
      url: 'http://www.lhps.org/lhps/lhp/Home.aspx',
      title: 'This link opens to Lake Highland Prepartory School',
      map: map
    });
    var pccamarker = new google.maps.Marker({
      position: pcca,
      url: 'http://www.pinecastleeagles.org/admissions/international-students/',
      title: 'This link opens to Pine Castle Christian Academy',
      map: map
    });

    google.maps.event.addListener(tfamarker, 'click', function() {
      // window.location.href = tfamarker.url;
      window.open(this.url, '_blank');
    });

    google.maps.event.addListener(gsmarker, 'click', function() {
      // window.location.href = gsmarker.url;
      window.open(this.url, '_blank');
    });

    google.maps.event.addListener(wpmarker, 'click', function() {
      // window.location.href = wpmarker.url;
      window.open(this.url, '_blank');
    });
    google.maps.event.addListener(lhpmarker, 'click', function() {
      // window.location.href = lhpmarker.url;
      window.open(this.url, '_blank');
    });
    google.maps.event.addListener(pccamarker, 'click', function() {
      // window.location.href = pccamarker.url;
      window.open(this.url, '_blank');
    });
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbp6VvyENKX8EmsrRXu5LdbZF3yflDkH8&callback=myMap"></script>

</body>
</html>
@endsection
