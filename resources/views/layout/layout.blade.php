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
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    
  </head>
  <body>
   <section id="bgColor">
       <div class="container">
           <header>
               <a href="#" class="logo">the<b>S</b>olution2y</a>
               <span>
                   <i id="choose_color" class="fas fa-palette"></i>
                   <ul class="backgroundcolors">
                       <li class="colors" id="blue"></li>
                       <li class="colors" id="red"></li>
                       <li class="colors" id="purple"></li>
                       <li class="colors" id="yellow"></li>
                       <li class="colors" id="orange"></li>
                       <li class="colors" id="green"></li>
                       <li class="colors" id="black"></li>
                       <li class="colors" id="default"></li>
                   </ul>
               </span>
           </header>
 
           <section class="content">
               @yield('content')
           </section>

           <footer>
                <span class="up_slide">
                    <ul>
                        <li>
                            <a href="{{url('/')}}" target="_self">
                                <i class="fas fa-home"></i> 
                                <span class="nav_menu">Home</span> 
                            </a>
                        </li>
                        <hr class="menu_divide_line">
                        <li>
                            <a href="{{url('study')}}" target="_self">
                                <i class="fab fa-leanpub"></i> 
                                <span class="nav_menu">Study</span>
                            </a>
                        </li>
                        <hr class="menu_divide_line">
                        <li>                            
                            <a href="{{url('contributor')}}" target="_self">
                                <i class="fas fa-users"></i> 
                                <span class="nav_menu">Contribute</span>
                            </a>
                        </li>
                        <hr class="menu_divide_line">
                        <li>                            
                            <a href="{{url('contactus')}}" target="_self">
                                <i class="fas fa-id-badge"></i> 
                                <span class="nav_menu">Contact Us</span>
                            </a>
                           
                        </li>
                        <hr class="menu_divide_line">
                        <li>                           
                            <a href="{{url('about')}}" target="_self">
                                <i class="fas fa-info-circle"></i> 
                                <span class="nav_menu">About</span>
                            </a>
                        </li>
                        <hr class="menu_divide_line">
                        <li>                            
                            <a href="{{url('login')}}" target="_self">
                                <i class="fas fa-id-badge"></i> 
                                <span class="nav_menu">SignUp/LogIn</span>
                            </a>
                        </li>
                    </ul>
                </span>

                <span id="hamburger"> <i class="fas fa-bars"></i> </span>
                <span id="ham_close"> <i class="fas fa-times"></i> </span>
                
                <span class="right_slide">
                    <ul>
                        <!-- <li>
                            <a href="#" target="_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li> -->
                        <li>
                            <a href="https://www.instagram.com/thesolution2y/" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/theSolution2y" target="_blank">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="#" target="_blank">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li> -->
                        <li>
                            <a href="https://twitter.com/thesolution2y?t=sM-ZVddAPQZPnpsRRs7nRQ&s=15" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </span>
           </footer>
       </div>
   </section>

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