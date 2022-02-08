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
</head>

<body>
    <main id="mainCont">
        <div class="container">
            <h2 class="title">Choose Subject</h2>
            <br>
            @foreach($cats as $data)
            <div class="card">
                <!-- Subject Related Image  -->
                <img class="card-img-top" src="{{asset('imgs')}}/{{$data['image']}}" alt="">
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="{{url('study/'.$data->id.'/read')}}">
                            {{$data['title']}}
                        </a>
                    </h4>
                </div>
            </div>
            @endforeach
        </div>
    </main>
</body>

</html>
@endsection