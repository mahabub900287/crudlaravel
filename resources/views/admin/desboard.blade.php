@extends('layouts.nav')
@section('title')
Desboard||Creative It
@endsection
@section('content')
    <div class="bg">
        <img src="img/img.jpg" style="width:100%; height:500px" alt="">
        <div class="bg-caption">
            <h6>You Are Login</h6>
            <h3>Welcome To Crative It</h3>
        </div>
    </div>
@endsection
<style>
    .bg{
       position: relative;
    }
    .bg-caption{
        position: absolute;
        top:50%;
        color:white;
        left:40%;
        text-align:center;
    }
    .bg-caption h6{
        font-size:25px;
    }
    .bg-caption h3{
        font-size:35px;
    }
</style>
@section('scripts')
@endsection
