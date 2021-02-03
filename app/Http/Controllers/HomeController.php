<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function index()
     {
         $data = [
         'posts' => Post::all()
         ];
         return view('guest.home', $data);
         // return view('guest.home');
     }
     public function contatti()
     {
         return view('guest.contatti');
     }
}
