
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
</head>

<body>
    <main>
        <!-- left sidebar  -->
       {{-- @foreach ($posts as $data)
       <embed src="{{ asset('storage'.'/'.$data->pdf_path)}}" type="application/pdf">
        
       @endforeach --}}

       <div id="pdf-viewer">
        {{-- <embed src="{{ asset('files/theSolution2y.pdf')}}" type="application/pdf" width="100%" height="100%"> --}}
            @foreach ($posts as $data)
            <embed src="{{ asset('files/'.$data->title)}}" type="application/pdf" width="100%" height="100%">

            @endforeach

       </div>
    </main>
</body>
{{-- <script>
    
PDFObject.embed("{{ route('pdf', ['id' => $id]) }}", "#pdf-viewer");

</script> --}}
</html>
@endsection