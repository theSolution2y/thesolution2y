@extends('layout.layout')
@section('study')
<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Study</title>
     <link rel="stylesheet" href="{{asset('frontend')}}/reading.css">
 </head>
 <body>
    <div class="catsec">
        <div class="chip">
            @foreach ($cats as $stud)
            <div class="column">
            <a style="text-decoration: none; color:black" href="{{url('study/'.$stud->id.'/read')}}">
            <ul>
            <img src="{{asset('imgs')}}/{{$stud->image}}" alt="{{$stud->title}}">
            <li>{{$stud->title}}</li>
            </ul>
            </a>
            </div>
            @endforeach
        </div>
    </div>
 </body>
 </html>
 @endsection