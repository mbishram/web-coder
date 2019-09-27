<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Coder Institute | Home';
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        $title = 'Coder Institute | About';
        return view('pages.about')->with('title', $title);
    }
    public function blog(){
        $title = 'Coder Institute | Blog';
        return view('pages.blog')->with('title', $title);
    }
    public function artikel(){
        $title = 'Judul dari Artikel Disini!';
        return view('pages.artikel')->with('title', $title);
    }
    public function contact(){
        $title = 'Coder Institute | Contact';
        return view('pages.contact')->with('title', $title);
    }
}
