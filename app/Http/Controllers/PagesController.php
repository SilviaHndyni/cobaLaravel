<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('index');
    }

    public function blog(){
        return view('blog');
    }
    
    public function about(){
        return view('about');
    }

}
