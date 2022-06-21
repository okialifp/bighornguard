<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models;
use App\Models\report_user;

class ReportController extends Controller
{
    public function store(Request $request)
    {
       // dd($request->all()); 

       report_user::create ([
           'title' => $request->title,
           'description' => $request->description,
       ]);

       return redirect('home');   
    }
}
