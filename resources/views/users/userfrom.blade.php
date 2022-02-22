@extends('layouts.nav')
@section('title')
Desboard||Creative It
@endsection
@section('content')
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<body>
    <div class="conainer mt-3">
    <div class="col-md-8 p-4 mx-auto">
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
            <form action="{{ route('data.submit') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="far fa-address-book"></i></span>
                    <input type="text" class="form-control" placeholder="Name" value="{{ old('name') }}" name="name">
                </div>
                  @error('name')
                        <p class="alert alert-danger p-2">{{ $message}}</p>
                    @enderror
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</i></span>
                    <input type="text" class="form-control" placeholder="User Name" name="uname" value="{{ old('uname') }}">
                  </div>
                    @error('uname')
                    <p class="alert alert-danger p-2">{{ $message}}</p>
                    @enderror
                 <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</i></span>
                    <input type="text" class="form-control" placeholder="Father Name" name="fname" value="{{ old('fname') }}">
                 </div>
                    @error('fname')
                    <p class="alert alert-danger p-2">{{ $message}}</p>
                    @enderror
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="far fa-envelope"></i></span>
                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                </div>
                    @error('email')
                    <p class="alert alert-danger p-2">{{ $message}}</p>
                    @enderror
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-alt"></i></i></span>
                    <input type="text" class="form-control" placeholder="Phone" name="phone" value="{{ old('phone') }}">
                </div>
                    @error('phone')
                    <p class="alert alert-danger p-2">{{ $message}}</p>
                    @enderror
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-ad"></i></span>
                    <textarea name="adress"class="form-control">{{old('adress')}}Adress</textarea>
                </div>
                @error('adress')
                <p class="alert alert-danger p-2">{{ $message}}</p>
                @enderror

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
