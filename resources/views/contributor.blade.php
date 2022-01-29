@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/contributor.css">
    </head>
    <body>
        <section>
            <form action="/contributor" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="container1">
                    <h3>Contributor Form</h3>
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <td><input type="text" name="name" class="form-control" /></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><input type="text" name="email" class="form-control" /></td>
                        </tr>
                        <tr>
                            <th>GitHub Url</th>
                            <td><input type="text" name="github" class="form-control" /></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" class="btn btn-primary" />
                            </td>
                        </tr>
                    </table>
                     
            </form>         
        </section>
    </body>
</html>
@endsection