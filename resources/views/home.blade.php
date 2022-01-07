@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/home.css">

</head>
<body>
    <div class="home">
        <div class="left">
            <img src="{{asset('imgs')}}/logo.png" alt="logo">
        </div>
        <div class="right">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error aliquam exercitationem quia ut officia aut, assumenda quos, distinctio consequatur minus sint. Fugit accusamus ut neque amet, eius a doloremque, similique velit vitae quisquam ipsum veritatis repellat illo. Quos sed eligendi quam a corporis adipisci placeat illo repellat. Soluta dolores suscipit ad corrupti Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, vitae asperiores. Ea rerum culpa accusamus excepturi, obcaecati ducimus aspernatur id! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit ea quam quasi eos vero, possimus sequi fugiat qui quaerat itaque nostrum libero delectus voluptates odio, in labore, ipsa mollitia commodi! Amet ad, optio porro praesentium deserunt ducimus quaerat laudantium. Quos iste explicabo a porro facilis nulla aperiam odio, nisi voluptates. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nesciunt exercitationem fugiat tenetur obcaecati totam quidem aspernatur quis nostrum nobis, soluta aut excepturi provident laudantium veritatis amet libero labore sequi corporis ex quo! Commodi accusantium eaque modi aliquam, suscipit dignissimos voluptas rerum corrupti assumenda nesciunt iusto rem ad totam quam Lorem, ipsum dolor sit amet consectetur adipisicing voluptatibus voluptas dolorem!       
            </p>
            <a style="text-decoration:none" href="{{url('/study')}}"><button>Let's Study</button></a>
        </div>  
    </div>
</body>
</html>
@endsection