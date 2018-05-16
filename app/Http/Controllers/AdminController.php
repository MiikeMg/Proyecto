<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
  
    public function index(){
      
      $users = User::where('name', '!=', '')
          ->paginate(10);
      return view('users.admin',compact('users'));
    }
  
    public function showUsers(){
      $users = User::where('name', '!=', '')
          ->paginate(10);
      return view('users.showUsers',compact('users'));
    }
  
    public function createUser(){
      return view('users.adminCreateUsers');
    }
  
    public function store(Request $request){
      //
    }
}
