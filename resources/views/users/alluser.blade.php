@extends('layouts.nav')
@section('title')
Desboard||Creative It
@endsection
@section('content')
<body>
    <div class="container-fluit" width="100%">
    <div class="row">
        <div class="col-md-12">
            <div class="card1">
                <div class="card-body">
                    @if (Session::has('post_delete'))
                        <div class="alert-success p-3 mb-2" role="alert">
                        {{ Session::get('post_delete')}}
                        </div>
                     @endif
                    <h3 class="bg-info text-center p-3 m-0">Users Ditails</h3>
                    @if (Session::has('post_deleted'))
                        <div class="alert-danger p-4" role="alert">
                        {{ Session::get('post_deleted')}}
                        </div>
                    @endif
                    <table class="table table-dark table-striped  table-bordered table-hover">
                        <thead>
                        <tr class="text-center">
                           <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created_Date</th>
                            <th>Updated_Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                        @foreach ($datas as $data)
                           <tr>
                               <td>{{ $data->id }}</td>
                               <td>{{ $data->name}} {{ $data->uname}}</td>
                               <td>{{ $data->email }}</td>
                               <td>{{ $data->phone}}</td>
                               <td>{{ $data->created_at}}</td>
                               <td>

                                 <a class="text-dark btn btn-info text-black" href="{{route('user.update',$data->id)}}">Edit</a>
                                  <a class="text-dark btn btn-success text-black" href="{{route('data.view',$data->id)}}">Viw</a>
                                  <a class="text-dark btn btn-danger text-black" href="{{route('data.delete',$data->id)}}">Del</a>
                               </td>

                           </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
 </body>
</html>
@endsection
@section('script')
@endsection

