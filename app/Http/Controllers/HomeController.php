<?php

namespace App\Http\Controllers;

use App\aboutus;
use App\Models\Block;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $blocks = Block::all();

        print_r($blocks);
        return view('home',$blocks);
    }
    public function hero()
    {
        return view('home');
    }

    public function carouselAdmin()
    {
        return view('carousel-admin');
    }

    public function aboutus()
    {
        $aboutus = aboutus::firstOrNew(array('email' => Input::get('email')));
        $aboutus->save();

        return view('aboutus');
    }


}
