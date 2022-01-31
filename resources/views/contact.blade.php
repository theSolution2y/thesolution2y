<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContactUs/Contributer Form</title>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/contact.css">
</head>

<body>
    <section id="contact/contributer-section">

        <div class="contributer-section">
            <h2>Contributer Form</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, pariatur.</p>
            <!-- form -->
            <form action="/contributer" method="post">

                <h4>username*</h4>
                <input type="text" name="txt" placeholder="username" required="">

                <h4>Email*</h4>
                <input type="email" name="email" placeholder="Email" required="">

                <h4>Git Url*</h4>
                <input type="text" name="git" placeholder="github link" required="">

                <div>
                    <input type="submit" value="SUBMIT">
                </div>
            </form>
        </div>


        <div class="contact-section">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus ad blanditiis voluptatem vero assumenda
                dolor ab.</p>
            <form action="/contact" method="post">
                <div>
                    <h3>Full Name</h3>
                    <input type="text" name="name" placeholder="Full Name">
                </div>

                <div class="inputBx">
                    <h3>Email</h3>
                    <input type="email" name="email" placeholder="Email">
                </div>

                <div class="inputBx">
                    <h3>How can we help you?</h3>
                    <textarea name="message" name="message" placeholder="Type Mesage Here..."></textarea>
                </div>

                <div class="inputBx">
                    <input type="submit" value="SEND MESSAGE">
                </div>

                <p class="text">We would get back to you soon</p>
            </form>
        </div>


    </section>
</body>

</html>