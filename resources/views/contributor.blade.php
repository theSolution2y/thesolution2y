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
                <div class="login-box">
                    <h3>Contributor Form</h3>
                 
                <div class="user-box">
                    <input type="text" name="" required="">
                    <label>Username</label>
                </div>
                   <div class="user-box">
                         <input type="password" name="" required="">
                         <label>Email</label>
                    </div>
                    <div class="user-box">
                         <input type="password" name="" required="">
                         <label>Github URL</label>
                </div>
                       
                        <tr>
                            <td colspan="2">
                                <input type="submit" class="btn btn-primary" />
                            </td>
                        </tr>
                        </section>
                     
            </form>         
      
    </body>
</html>
@endsection