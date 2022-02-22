@extends('layouts.nav')
@section('title')
Desboard||Creative It
@endsection
@section('content')
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
<div class="conainer mt-3">
<div class="col-md-8 p-4 mx-auto">
    <div class="card p-4">
        <div class="card-header">
           <h3>Post Ditails</h3>
        </div>
    <div class="card_body">
        <div class="col-md-12 p-0 m-0">
            <table class="table table-dark table-striped table-bordered">
                <tr>
                    <th>Id:</th>
                    <td>{{$data->id}}</td>
                </tr>

                <tr>
                    <th>Name:</th>
                    <td>{{$data->name}}</td>
                </tr>
                <tr>
                    <th>User Name:</th>
                    <td>{{$data->uname}}</td>
                </tr>
                <tr>
                    <th>Father's Name:</th>
                    <td>{{$data->fname}}</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>{{$data->email}}</td>
                </tr>
                <tr>
                    <th>Adress:</th>
                    <td>{{$data->adress}}</td>
                </tr>
            </table>
        </div>
    </div>
    <a href="{{route('alluser')}}" class="btn btn-primary">Back</a>
 </div>
 </div>
    </div>
</body>
</html>
@endsection
@section('script')
@endsection
