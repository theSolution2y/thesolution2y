@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/contributor.css">
    </head>
    <body>
        <section>
            <form action="/contributor" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="container1">
                    <h3>Contributor Form</h3>
                     <div class="head">  
                         <label for="name">Name</label><br>
                        <input type="text" placeholder="Enter your name" id="name" required>
                     </div>         

                  <div class="head"> 
                    <label for="email">Email</label><br>
                        <input type="text" placeholder="Enter your Email" id="email" required>
                  </div>      

                  <div class="head">
                         <label for="github">Github Profile URL</label><br>
                        <input type="URL" placeholder="Enter your Gihub Profile URL" id="github" required>
                    </div>                     
                </div>   
                <div class="submit-btn">
                    <button class="submit">Submit</button> 
                </div>        
            </form>         
        </section>
    </body>
</html>
@endsection