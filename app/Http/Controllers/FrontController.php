<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontendpage');
    }

    /**
     * Show a multilingual page.
     *
     * @return \Illuminate\Http\Response
     */
    public function multilangpage()
    {
      return view('multilang/multilangpage');
    }

}
