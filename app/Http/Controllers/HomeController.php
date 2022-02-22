<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function alluser()
    {   $datas=UserData::all();
        return view('users.alluser',compact('datas'));
    }
    public function userfrom()
    {
        return view('users.userfrom');
    }
    function AddData(Request $request){
        $validated = $request->validate([
            'name'=>'required',
            'uname'=>'required',
            'fname'=>'required|min:3',
            'email'=>'required',
            'phone'=>'required',
            'adress'=>'required',
        ]);
        $member=$this->middleware('auth');
        $member=new UserData();
        $member->name =$request->name;
        $member->uname =$request->uname;
        $member->fname =$request->fname;
        $member->email =$request->email;
        $member->phone =$request->phone;
        $member->adress =$request->adress;
        $member->save();
        return redirect('userfrom')->with('post_created','User Data Submit successfully');

  }
  function delete($id){
    $data=UserData::find($id);
    $data->delete('id');
    return redirect('alluser')->with('post_delete','User Data Delete successfully');
    }
    function view($id){
        $data=UserData::find($id);
        return view('users.view',compact('data'));
    }
    function showdata($id){
        $data=UserData::find($id);
        return view('users/edit',['data'=>$data]);
    }
    function update(Request $request)
    {
        $data=UserData::find($request->id);
        $data->name=$request->name;
        $data->uname=$request->uname;
        $data->fname =$request->fname;
        $data->email=$request->email;
        $data->phone =$request->phone;
        $data->adress =$request->adress;
        $data->save();
        return redirect('alluser');
    }
}
