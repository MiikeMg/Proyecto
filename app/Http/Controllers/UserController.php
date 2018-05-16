<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
<<<<<<< HEAD
{  
    public function __construct()
    {
        $this->middleware('user');
    }
  
    public function index(){
      
      $users = User::where('name', '!=', '')
          ->paginate(10);
      return view('users.index',compact('users'));
    }
  
  
=======
{
    
>>>>>>> a618ce39020c880ccea0a46d36b4f82079f07b40
}
