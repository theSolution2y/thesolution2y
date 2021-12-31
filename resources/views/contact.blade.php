<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us form</title>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/contact.css">
</head>
<body>
    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="square" style="--i:0"></div>
            <div class="square" style="--i:1"></div>
            <div class="square" style="--i:2"></div>
            <div class="square" style="--i:3"></div>
            <div class="square" style="--i:4"></div>
            <div class="container">
                <div class="form">
                    <h2>Contact Us</h2>
                    <form action="/contactus" method="post">
                        @csrf
                        <div class="inputBx">
                            <input type="text" name="name" placeholder="Full Name">
                        </div>
                        <div class="inputBx">
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="inputBx">
                            <textarea name="message" name="message" placeholder="Type Mesage Here..."></textarea>
                        </div>
                        <div class="inputBx">
                            <input type="submit" value="Submit">
                        </div>
                        <p class="text">We would get back to you soon</p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>