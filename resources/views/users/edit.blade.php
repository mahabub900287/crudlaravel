@extends('layouts.nav')
@section('title')
Desboard||Creative It
@endsection
@section('content')
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<body>
    <div class="conainer mt-3">
    <div class="col-md-6 p-4 mx-auto">
        <div class="card p-4">
            <div class="card-header">
               <h3>User Dtilies From</h3>
            </div>
        <div class="card_body">
            @if (Session::has('post_created'))
                <div class="alert-success p-3 mb-2" role="alert">
                  {{ Session::get('post_created')}}
                </div>
            @endif
            <form action="{{route('user.update')}}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="hidden" class="form-control" name="id" value="{{$data->id}}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="far fa-address-book"></i></span>
                    <input type="text" class="form-control" placeholder="Name"  name="name" value="{{$data->name}}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</i></span>
                    <input type="text" class="form-control" placeholder="User Name" name="uname" value="{{ $data->uname}}">
                  </div>

                 <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</i></span>
                    <input type="text" class="form-control" placeholder="Father Name" name="fname" value="{{ $data->fname}}">
                 </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="far fa-envelope"></i></span>
                    <input type="email" class="form-control" placeholder="Email" name="email"  value="{{ $data->email}}">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-alt"></i></i></span>
                    <input type="text" class="form-control" placeholder="Phone" name="phone" value="{{ $data->phone}}">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-ad"></i></span>
                    <input name="adress"class="form-control p-4"value="{{ $data->adress}}">
                </div>
             <div class="input-group mb-3">
                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
             </div>
         </form>
        </div>
      </div>
      </div>
    </div>
    </body>
@endsection
@section('script')
@endsection


