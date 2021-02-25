<?php

namespace App\Http\Controllers;

use App\user;
use App\Message;

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

  public function Liste()
  {
    $users = User::all();
    return view('users',[
        'users'=>$users,
      ]);
  }          


}







