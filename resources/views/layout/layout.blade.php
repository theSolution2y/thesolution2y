<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('frontend')}}/layout.css">
    <link rel="stylesheet" href="{{asset('icon')}}/css/all.css">
    <link rel="icon" href="{{asset('icon')}}/favicon.ico" type="image/x-icon">

    <!-- font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    
  </head>
  <body>
  <img src="{{asset('imgs')}}/background.png" alt="" id="bg">
       <header>
       <div id="brand"><img src="{{asset('imgs')}}/logo.png" alt="" id="imglogo"><a href="/">TheSolution2Y</a></div>
      <nav>
      <ul>
   
        <li class="effect"><a href="/">Home</a></li>
        <li class="effect"><a href="/about">About</a></li>
        <li class="effect"><a href="/contact">Contact\Contribute</a></li>
      
        @guest
                <li id="login"><a href="{{url('login')}}">Login</a></li>
                <li id="signup"><a href="{{url('register')}}">SignUp</a></li>
        @else
          <li>
          <a onclick="event.preventDefault();
           document.getElementById('logout-form').submit();" href="{{url('logout')}}">Logout</a>
          </li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
            
        @endguest
      </ul>
    </nav>
    <div id="hamburger-icon" onclick="toggleMobileMenu(this)">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
      <ul class="mobile-menu">
        <li  class="effect"><a href="/">Home</a></li>
        <li  class="effect"><a href="/about">About</a></li>
        <li  class="effect"><a href="/contact">Contact\Contribute</a></li>
        @guest
                <li id="login"><a href="{{url('login')}}">Login</a></li>
                <li id="signup"><a href="{{url('register')}}">SignUp</a></li>
        @else
          <li>
          <a onclick="event.preventDefault();
           document.getElementById('logout-form').submit();" href="{{url('logout')}}">Logout</a>
          </li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
            
        @endguest
      </ul>
    </div>
  </header>
 
           <section class="content">
               @yield('content')
           </section>

           <footer id="fott">
              <a href="https://twitter.com/thesolution2y" class="fa fa-twitter"></a>
              <a href="https://github.com/theSolution2y/thesolution2y" class="fa fa-github"></a>
              <a href="https://www.instagram.com/thesolution2y" class="fa fa-instagram"></a>
           </footer>
     
  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="{{asset('frontend')}}/layout.js"></script>
    
  </body>
</html>