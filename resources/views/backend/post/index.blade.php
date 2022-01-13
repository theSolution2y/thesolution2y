@extends('backend.admincheck')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{asset('backend')}}/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    
    <title>Document</title>
</head>
<body>
    <div class="card-header">
        <a href="{{url("admin/post/create")}}" class="btn btn-primary">Add new Post</a>
    </div>
    <div class="card-header">
        <a href="{{url("admin/dashboard")}}" class="btn btn-primary">Dashboard</a>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table table-bordered">
                <thead>
                    <tr>
                      <th>#</th>
                      {{-- <th>Category</th> --}}
                      <th>Title</th>
                      <th>Details</th>
                      <th>Image</th>
                      <th>PDF</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      {{-- <th>Category</th> --}}
                      <th>Title</th>
                      <th>Details</th>
                      <th>Image</th>
                      <th>PDF</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                      @foreach($data as $post)
                      <tr>
                        <td>{{$post->id}}</td>
                        {{-- <td>{{$post->category->title}}</td> --}}
                        <td>{{$post->title}}</td>
                        <td>{{$post->detail}}</td>
                        <td><img src="{{ asset('imgs/thumb').'/'.$post->thumb }}" width="100" /></td>
                        <td><a href="{{ asset('public/files').'/'.$post->pdf_path }}" target="_blank">{{$post->pdf_path}}</a></td>
                        <td>
                          <a class="btn btn-info btn-sm" href="{{url('admin/post/'.$post->id.'/edit')}}">Update</a>
                          <a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm" href="{{url('admin/post/'.$post->id.'/delete')}}">Delete</a>
                        </td>
                      </tr>
                      @endforeach
                  </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>