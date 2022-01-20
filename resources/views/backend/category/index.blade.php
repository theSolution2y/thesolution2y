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
        <a href="{{url("admin/category/create")}}" class="btn btn-primary">Add new Category</a>
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
                        <th scope="col">Id</th>
                        <th>Title</th>  
                        <th>Details</th>
                        <th>PDF</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($data as $cat )
                        <tr>
                            <td>{{$cat->id}}</td>
                            <td>{{$cat->title}}</td>
                            <td>{{$cat->detail}}</td>
                            <td><a href="{{asset('imgs').'/'.$cat->image}}" type="URL" target="_blank">{{asset('imgs').'/'.$cat->image}}</a>
                        </td>
                            <td>
                                <a href="{{url('admin/category/'.$cat->id.'/edit')}}">Update</a>
                                <a href="{{url('admin/category/delete')}}/{{$cat->id}}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    
                    
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>