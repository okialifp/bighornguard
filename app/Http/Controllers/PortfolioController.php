<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function show_portfolio()
    {
        return view('home.portfolio.project');
    }
}
