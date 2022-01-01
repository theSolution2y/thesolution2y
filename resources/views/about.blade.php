@extends('layout.layout')
@section('content')
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>About</title>
     <link rel="stylesheet" href="{{asset('frontend')}}/about.css">
 </head>
 <body>
 <!-- You can code now from here -->
 <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam dicta esse eligendi praesentium repudiandae possimus dolorum. Velit optio autem rem aperiam molestias est possimus exercitationem doloremque? Provident beatae saepe molestias?</p> -->
 <div class="aboutus">
     <h1>ABOUT US</h1>
     <p class="mission">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla illum beatae, explicabo eius exercitationem repellat quidem architecto pariatur! Ut, tempora.>"</p>
     <p class="mission">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas natus minima maxime aspernatur, sapiente ullam magnam praesentium nostrum quidem nemo, vitae blanditiis aut exercitationem eligendi, reprehenderit enim voluptatibus eius voluptates doloremque consectetur excepturi iste quisquam impedit? Quam iste officia incidunt nobis, quasi rerum suscipit placeat facilis esse corporis minima? Temporibus!</p>
     <h2>OUR TEAM</h2>

        <div>
            <span class="card">
                <img class="card-img-top circle" src="https://media-exp1.licdn.com/dms/image/C4D03AQE34rUMv4-CqQ/profile-displayphoto-shrink_400_400/0/1640097418879?e=1646265600&v=beta&t=Kg8mSjGWnVspJLJHZrHdEOVzbwLe_vRUPBbXfXU0noU" alt="Card image cap">
                <div class="card-body">
                    <a href="" class="btn btn-primary">Balendu Rawat</a>                    
                    <!-- <h5 class="card-title">Balendu Rawat</h5> -->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>               
            </span> 
            <span class="card" >
                <img class="card-img-top circle" src="https://media-exp1.licdn.com/dms/image/C5603AQFTTAShllt9Kw/profile-displayphoto-shrink_400_400/0/1640522414424?e=1646265600&v=beta&t=UqDerpADgACe2FlDBc3GoUpqXkhnektWAXyqE70PEgc" alt="Card image cap">
                <div class="card-body">
                    <a href="#" class="btn btn-primary">Shivam samant</a>                    
                    <!-- <h5 class="card-title">Shivam samant</h5> -->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's contents</p>
                </div>               
            </span> 
            <span class="card" >
                <img class="card-img-top circle" src="https://media-exp1.licdn.com/dms/image/C4E03AQH98ZI2TsIq5Q/profile-displayphoto-shrink_400_400/0/1620990776781?e=1646265600&v=beta&t=a-q1uLAjwEsr4YJ2GaEPory2vGRQ1yA0WO-oGXEZ7w8" alt="Card image cap">
                <div class="card-body">
                    <a href="#" class="btn btn-primary">Shivam uttpal jha</a>                    
                    <!-- <h5 class="card-title">Shivam uttpal jha</h5> -->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>               
            </span> 
            <span class="card" >
                <img class="card-img-top circle" src="https://media-exp1.licdn.com/dms/image/C5603AQHP-a2yYcywGQ/profile-displayphoto-shrink_400_400/0/1640755531220?e=1646265600&v=beta&t=W201DfH3_52vUK2XY5YP-Mfj8k787mDJxYHYrGTgSQA" alt="Card image cap">
                <div class="card-body">
                    <a href="#" class="btn btn-primary">Siddharth saklani</a>                    
                    <!-- <h5 class="card-title">Siddharth saklani</h5> -->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>               
            </span> 
            <!-- <div class="center"> -->
            <span class="card" >
                <img class="card-img-top circle" src="https://media-exp1.licdn.com/dms/image/C4E03AQFO4e9CYS859g/profile-displayphoto-shrink_400_400/0/1626239612453?e=1646265600&v=beta&t=j37TzvuzQGjR9_mRnhs8GhCQboUrfAgotH96xYKOipI" alt="Card image cap">
                <div class="card-body">
                    <a href="#" class="btn btn-primary">Ishan chauhan</a>                    
                    <!-- <h5 class="card-title">Ishan chauhan</h5> -->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>               
            </span> 
            <span class="card" >
                <img class="card-img-top circle" src="https://media-exp1.licdn.com/dms/image/C5603AQH7p3SA33yBBQ/profile-displayphoto-shrink_400_400/0/1640842957585?e=1646265600&v=beta&t=uJM0bLRUrsm6SZfc1fmRzVMUzBnlv4xDh_bZUummkJc" alt="Card image cap">
                <div class="card-body">
                    <a href="#" class="btn btn-primary">Ayush uniyal</a>                    
                    <!-- <h5 class="card-title">Ayush uniyal</h5> -->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>               
            </span> 
            <span class="card" >
                <img class="card-img-top circle" src="https://media-exp1.licdn.com/dms/image/C4D03AQH6GbBqHCrptQ/profile-displayphoto-shrink_400_400/0/1640842587282?e=1646265600&v=beta&t=FF_03guTR9XL7HlM5Mq3Ht5uPRktyH8ePi1l_dyyqa4" alt="Card image cap">
                <div class="card-body">
                    <a href="#" class="btn btn-primary">Devyush raturi</a>                    
                    <!-- <h5 class="card-title">Devyush raturi</h5> -->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>               
            </span> 
            <!-- </div> -->
        </div>

 </body>
 </html>
 @endsection