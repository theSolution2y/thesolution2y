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
    <style>
        #pdf-viewer {
            position: absolute;
            top: 0;
            left: 0;
            height: 100vh;
            width: 100vw;
        }
    </style>
</head>

<body>
    <main>
        <div id="pdf-viewer">
            @foreach ($posts as $data)
            <embed src="{{ asset('files/'.$data->name)}}" type="application/pdf" width="100%" height="100%">
            @endforeach
        </div>
    </main>
</body>

</html>
@endsection