<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Input;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
  
    public function showUsers(){
      $users = User::where('name', '!=', '')
          ->paginate(10);
      return view('users.showUsers',compact('users'));
    }
  
    public function createUser(){
      return view('users.adminCreateUsers');
    }
  
    public function store(){
      request()->validate([         //validaciones requeridad para cada usuario
        'name' => 'required',       //las alertas se muestran en las view
        'email'=> 'required',       //con $errors
        'password' => 'required',
        'role' => 'required',
      ]);
      
      User::create(request()->all());
      
      return back()->with('alert', 'Usuario Creado!');
    }
    public function edit(User $user){
      return view('users.adminEditUser', compact('user'));
    }

    public function update(User $user){
      request()->validate([
        'name' => 'required',
        'email'=> 'required',
        'role' => 'required',
      ]);
      $user->role=Input::get('role');//recuperamos y asignamos el valor del form:selected ya que por si solo no lo tomaba
      $user->update(request()->all());
      return back()->with('alert', 'Usuario Modificado!');//retroalimentacion hacia el usuario
    }

    public function destroy(User $user){
      $user->delete();
      return back()->with('alert', 'Usuario Eliminado!');
    }
}
