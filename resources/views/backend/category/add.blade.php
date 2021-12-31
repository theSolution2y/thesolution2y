@extends('backend.admincheck')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
    <link href="{{asset('backend')}}/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    
</head>
<body>

    @if ($errors)
        @foreach ($errors->all() as $error)
            <p class="text-danger">{{$error}}</p>
        @endforeach
    @endif

    @if (Session::has('success'))
        <p class="text-success">{{session('success')}}</p>
        
    @endif


    <form method="post" action="{{url('admin/category')}}" enctype="multipart/form-data">
        @csrf
        <table class="table table-bordered">
            <tr>
                <th>Title</th>
                <td><input type="text" name="title" class="form-control" /></td>
            </tr>
            <tr>
                <th>Detail</th>
                <td><input type="text" name="detail" class="form-control" /></td>
            </tr>
            <tr>
                <th>Image</th>
                <td><input type="file" name="cat_image" /></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" class="btn btn-primary" />
                </td>
            </tr>
        </table>
      </form>
      <a class="float-right btn btn-sm btn-dark tn-dark" href="{{url('admin/category')}}">All data</a>

</body>
</html>