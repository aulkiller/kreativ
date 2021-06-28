<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        return view('pages.index');
    }

    public function kreativ(){
        return view('pages.kreativ');
    }

    public function undercon(){
        return view('pages.undercon');
    }

    public function karir(){
        return view('pages.karir');
    }
    
}
