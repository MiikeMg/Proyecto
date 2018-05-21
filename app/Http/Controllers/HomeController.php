<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Auth;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $id=Auth()->user()->id;
      $articles = Article::where('user_id', '=', $id)
          ->paginate(15);
          $articles->each(function($articles){
              $articles->category;
              $articles->user;
          });
      return view('home',compact('articles',$articles));
    }

}
