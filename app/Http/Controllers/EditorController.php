<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class EditorController extends Controller
{
    public function __construct()
    {
        $this->middleware('editor');
    }
  
    public function index(){
      
      $users = User::where('name', '!=', '')
          ->paginate(10);
      return view('users.index',compact('users'));
    }
}
