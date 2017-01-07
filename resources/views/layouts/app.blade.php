<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AASP</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<style>

body {
    font-family: 'Raleway', sans-serif;
    background-color: #5a5a5a;;
}

.custom1.darken-2 {
    background-color: white;
}

.custom1-text.text-darken-2, nav ul a {
    color: white;
}

nav {
  color: #fff;
  background-color: #5a5a5a;
  width: 100%;
  height: 80px;
  line-height: 80px;
}

</style>
</head>

<body>
	<nav class="custom2 darken-3 z-depth-1" role="navigation">
    <div class="nav-wrapper">
        <a class="brand-logo center custom1-text text-darken-2">Asia-America Student Placement</a>
        <ul class="right hide-on-med-and-down">
        	<li><a href="{{ url('/') }}"class="custom1-text text-darken-2 active">Home</a></li>
            <li><a href="{{ url('./about') }}"class="custom1-text text-darken-2 active">About</a></li>
            <li><a href="{{ url('./consultants') }}"class="custom1-text text-darken-2 active">Consultants</a></li>
            <li><a href="{{ url('./schools') }}"class="custom1-text text-darken-2 active">Schools</a></li>
        </ul>
    </div>
    <div class="container">
        @yield('content')
    </div>
</nav>
</body>
</html>

