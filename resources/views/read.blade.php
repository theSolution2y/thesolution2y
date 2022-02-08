@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reading</title>
    <link rel="stylesheet" href="{{asset('frontend')}}/reading.css">
    <script src="{{asset('frontend')}}/read.js" defer></script>
</head>

<body>
    <main id="mainCont">
        <div class="container">
            <!-- unit name list -->
            @foreach ($posts as $data)
            <div class="card">
                <div class="card-body">
                    <ul>
                        <h4 class="card-title">
                        <a href="{{url('pdf/'.$data->id)}}">{{$data->title}}</a></li>
                        </h4>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </main>
</body>

</html>
@endsection