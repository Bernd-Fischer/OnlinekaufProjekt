<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ware;
use App\Gekauft;

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
        return view('login');
    }

    public function einkauf()
    {
        $ware = Ware::all();

        return view('einkauf', compact('ware'));

    }

    public function uebersicht()
    {
        $gekauft = Gekauft::all();

        return view('uebersicht', compact('gekauft'));


    }

    public function aufladen()
    {
        return view('aufladen');
    }

    public function profil()
    {
        return view('profil');
    }

    public function umsaetze()
    {
        return view('umsaetze');
    }



}
