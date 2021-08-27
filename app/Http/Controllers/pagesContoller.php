<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesContoller extends Controller
{
    

    public function index(){
        return view('new-index');
    }

    public function shop(){
        
        return view('shop');
    }

    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    // public function addtool(){
    //     return view('addtool');
    // }
}