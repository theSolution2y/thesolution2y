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
            <form action="#">
                <div class="container1">
                    <h3>Contributor Form</h3>
                     <div class="head">  
                         <label for="username">Name</label><br>
                        <input type="text" placeholder="Enter your name" id="name">
                     </div>         

                  <div class="head"> 
                    <label for="username">Email</label><br>
                        <input type="text" placeholder="Enter your Email" id="email">
                  </div>      

                  <div class="head">
                         <label for="username">Github Profile URL</label><br>
                        <input type="URL" placeholder="Enter your Gihub Profile URL" id="github">
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