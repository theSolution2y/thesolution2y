@extends('backend.admincheck')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UPDATE CHAPTERS</title>
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


    <form method="post" action="{{url('admin/post/'.$data->id)}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <table class="table table-bordered">
            <tr>
                  <th>Category<span class="text-danger">*</span></th>
                  <td>
                    <select class="form-control" name="category">
                      @foreach($cats as $cat)
                        @if($cat->id==$data->cat_id)
                        <option selected value="{{$cat->id}}">{{$cat->title}}</option>
                        @else
                        <option value="{{$cat->id}}">{{$cat->title}}</option>
                        @endif
                      @endforeach
                    </select>
                  </td>
            </tr>
            <tr>
                <th>Title</th>
                <td><input type="text" value="{{$data->title}}" name="title" class="form-control" /></td>
            </tr>
            <tr>
                <th>Thumb</th>
                <td>
                  <p class="my-2"><img width="80" src="{{asset('imgs/thumb')}}/{{$data->thumb}}" /></p>
                  <input type="hidden" value="{{$data->thumb}}" name="post_thumb" />
                  <input type="file" name="post_thumb" />
                </td>
            </tr>
            <tr>
                <th>Full Image</th>
                <td>
                  <p class="my-2"><img width="80" src="{{asset('imgs/full')}}/{{$data->full_img}}" /></p>
                  <input type="hidden" value="{{$data->full_img}}" name="post_image" />
                  <input type="file" name="post_image" />
                </td>
            </tr>
            <tr>
                <th>Detail<span class="text-danger">*</span></th>
                <td>
                  <textarea class="form-control" name="detail">{{$data->detail}}</textarea>
                </td>
            </tr>
            <tr>
                <th>Tags</th>
                <td>
                  <textarea class="form-control" name="tags">{{$data->tags}}</textarea>
                </td>
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