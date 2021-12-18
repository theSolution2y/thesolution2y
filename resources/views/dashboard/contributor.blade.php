@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Contributor CSS-->
    <link href="{{asset('frontend')}}/contributor.css" rel="stylesheet" />
    <title>Contributor Form</title>
</head>
<body>
<form>
    <h3>Contributor Form</h3>
    <label for="username">Name</label>
        <input type="text" placeholder="Enter your name" id="name">

    <label for="username">Email</label>
        <input type="text" placeholder="Enter your Email" id="email">

    <label for="username">Github Profile URL</label>
        <input type="URL" placeholder="Enter your Gihub Profile URL" id="github">

    <div class="submit-btn">
        <button class="submit">Submit</button> 
    </div>  
</form>
</body>
</html>
@endsection