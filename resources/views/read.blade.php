@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reading</title>
    <link rel="stylesheet" href="{{asset('frontend')}}/reading.css">
    <script src="{{asset('frontend')}}/read.js" defer></script>
</head>

<body>
    <main>
        <div class="Cont">
            <!-- left sidebar  -->
            <div class="leftSide">
                <div class="title">
                    <h2>Subject Name</h2>
                </div>
                <!-- unit name list -->
                <div class="unitNameList">
                    <ul>
                        @foreach ($posts as $data)
                        <li>{{$data->title}}</li>

                        @endforeach
                        {{-- <li>Unit 1</li> --}}

                    </ul>
                </div>
            </div>
            <!-- right sidebar  -->
            <div class="rightSide">
                <header>
                    <!-- Unit Name -->
                    <div class="unitName">Unit Name</div>
                    <div class="icon">
                        <ul>
                            <li>
                                <!-- fullscreen expand icon  -->
                                <span id="expand"><i class="fas fa-expand"></i></span>
                                <!-- fullscreen compress icon  -->
                                <span id="compress"><i class="fas fa-compress"></i></span>
                            </li>
                            <li>
                                <!-- dark mode icon  -->
                                <span><i class="fas fa-moon"></i></span>
                                <!-- light mode icon  -->
                                <span><i class="fas fa-sun"></i></span>
                            </li>
                        </ul>
                    </div>
                </header>

                <!-- pdf section  -->
                <section class="pdfCont">
                    <embed src="" type="">
                </section>
            </div>
        </div>
    </main>
</body>

</html>
@endsection