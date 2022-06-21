<?php

namespace App\Http\Controllers;
use App\Models;
use App\Models\news;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function heroindex(){
        $news = news::get();
        return view('home.index',['news' => $news]);
    }
    
    public function newsindex(){
        $news = news::get();
        return view('home.news.index',['news' => $news]);
    }
}
