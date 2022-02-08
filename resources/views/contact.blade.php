@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContactUs/Contributer Form</title>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/contact.css">
</head>

<body>
    <section id="contactandcontri">

        <div class="contributer-section">
            <h2>Contributor Form</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, pariatur.</p>
            <!-- form -->
            <form action="/contributor" method="post">
                @csrf
                <label for="fname">Username*</label>
                <input type="text" name="txt" placeholder="username" required="">

                <label>Email*</label></br>
                <input type="email" name="email" placeholder="Email" required=""></br>

                <label>Git Url*</label></br>
                <input type="text" name="git" placeholder="github link" required=""></br>

                <div>
                    <input type="submit" value="SUBMIT">
                </div>
            </form>
        </div>

  <div id="divison"></div>

        <div class="contact-section">
            <h2>Contact Us</h2>
            <p class="text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus ad blanditiis voluptatem vero assumenda
                dolor ab.</p>
            <form action="/contactus" method="post">
                @csrf
             
                   <label for="">Name*</label>
                    <input type="text" name="name" placeholder="Full Name">
                

                
                    <label>Email*</label></br>
                    <input type="email" name="email" placeholder="Email">
            

                
                   <label for="">How can we help you?</label>
                    <textarea name="message" name="message" placeholder="Type Mesage Here..."></textarea>
                

                <div class="inputBx">
                    <input type="submit" value="SEND MESSAGE">
                </div>

                <p class="text">We would get back to you soon</p>
            </form>
        </div>


    </section>
   
</body>

</html>

@endsection