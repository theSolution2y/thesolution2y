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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error aliquam exercitationem quia ut officia aut, assumenda quos, distinctio consequatur minus sint. Fugit accusamus ut neque amet, eius a doloremque, similique velit vitae quisquam ipsum veritatis repellat illo Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, eligendi..       
            </p>
            <div id="button">
            <button> <a style="text-decoration:none" href="{{url('/study')}}"> Let's Study </a> </button>
            </div>
        </div>   
    </div>
</body>
</html>
@endsection