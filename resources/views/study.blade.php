@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study</title>
    <link rel="stylesheet" href="{{asset('frontend')}}/study.css">
    <style>
        .card .card-img-top{
            max-width: 5.5rem;
            height: 5rem;
        }
    </style>
</head>

<body>
    <main>
        <!-- First Year  -->
        <div class="container">
            <div class="title">
                <!-- Year Name  -->
                <h2 class="year">First Year</h2>
            </div>
            <div class="card">
                <!-- Subject Related Image  -->
                @foreach($cats as $data)
                <img class="card-img-top" style="" src="{{asset('imgs')}}/{{$data['image']}}" alt="">
                <div class="card-body">
                    <h4 class="card-title"><a href="{{url('study/'.$data->id.'/read')}}">{{$data['title']}}</a></h4>
            </div>
            @endforeach
            </div>
        </div>
        <!-- Second Year  -->
        <div class="container">
            <div class="title">
                <!-- Year Name  -->
                <h2 class="year">Second Year</h2>
            </div>
            <div class="card">
                <!-- Subject Related Image  -->
                @foreach($cats as $data)
                <img class="card-img-top" style="" src="{{asset('imgs')}}/{{$data['image']}}" alt="">
                <div class="card-body">
                    <h4 class="card-title">
                        {{$data['title']}}
                </h4>
            </div>
            @endforeach
            </div>
        </div>
        <!-- Third Year  -->
        <div class="container">
            <div class="title">
                <!-- Year Name  -->
                <h2 class="year">Third Year</h2>
            </div>
            <div class="card">
                <!-- Subject Related Image  -->
                @foreach($cats as $data)
                <img class="card-img-top" style="" src="{{asset('imgs')}}/{{$data['image']}}" alt="">
                <div class="card-body">
                    <h4 class="card-title">
                        {{$data['title']}}
                </h4>
            </div>
            @endforeach
            </div>
        </div>
        <!-- Fourth Year  -->
        <div class="container">
            <div class="title">
                <!-- Year Name  -->
                <h2 class="year">Fourth Year</h2>
            </div>
            <div class="card">
                <!-- Subject Related Image  -->
                @foreach($cats as $data)
                <img class="card-img-top" style="" src="{{asset('imgs')}}/{{$data['image']}}" alt="">
                <div class="card-body">
                    <h4 class="card-title">
                        {{$data['title']}}
                </h4>
            </div>
            @endforeach
            </div>
        </div>
    </main>
</body>
</html>
@endsection