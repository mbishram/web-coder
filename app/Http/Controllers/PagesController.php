<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Home';
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        $title = 'About';
        return view('pages.about')->with('title', $title);
    }
    public function blog(){
        $title = 'Blog';
        return view('pages.blog')->with('title', $title);
    }
    public function contact(){
        $title = 'Contact';
        return view('pages.contact')->with('title', $title);
    }
}
