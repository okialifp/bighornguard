<?php

namespace App\Http\Controllers;

use App\Models;
use App\Models\news;
use Illuminate\Http\Request;

class CarrerController extends Controller
{
    public function carrerdetail()
    {
        $news = news::get();
        return view('home.carrer.detail',compact('news'));
    }

    public function carrerindex(){
        $news = news::get();
        return view('home.components.carrer',compact('news'));
    }
}
