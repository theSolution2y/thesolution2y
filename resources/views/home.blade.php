@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/contact.css">

</head>
<body>
    <section>
            <div class="container">
                <div class="form">
                    <h2>Contact Us</h2>
                    <form action="">
                        <div class="inputBx">
                            <input type="text" placeholder="Full Name">
                        </div>
                        <div class="inputBx">
                            <input type="email" placeholder="Email">
                        </div>
                        <div class="inputBx">
                            <textarea name="message" id="" placeholder="Type Mesage Here..."></textarea>
                        </div>
                        <div class="inputBx">
                            <input type="submit" value="Submit">
                        </div>
                        <p class="text">We would get back to you soon</p>
                        <p class="text">Don't have an account? <a href="#">Click Here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
@endsection