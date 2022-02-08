@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/home.css">

</head>
<body>
    <div class="home">
        <div class="left">
            <img src="{{asset('imgs')}}/logo.png" alt="logo">
        </div>
        <div class="right">
            <h1>ONLINE STUDYING</h1>
            <p>TheSolution2Y an open source project & an educational site, specially for university students. Click on the button down below to experience the best.</p>
            <div id="button">
            <button> <a style="text-decoration:none" href="{{url('/study')}}"> Let's Study </a> </button>
            </div>
        </div>   
    </div>
</body>
</html>
@endsection