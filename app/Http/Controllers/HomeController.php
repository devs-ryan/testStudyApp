<?php

namespace App\Http\Controllers;

use App\Models\Test;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', ['tests' => Test::all()]);
    }
}
