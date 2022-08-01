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

    public function detailnews($id)
    {
         
        $news = news::get();
        $detailNews = news::find($id);
        return view('home.admin.components.detail',compact('news', 'detailNews'));

    }
    
    public function newsindex()
    {
        $news = news::paginate(5);
        return view('home.news.index',compact('news'));
    }

    public function carrerindex(){
        $news = news::get();
        return view('home.components.carrer',compact('news'));
    }
    
}
