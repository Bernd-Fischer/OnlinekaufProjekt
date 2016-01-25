<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{


    public function aufladen() {
        return view('aufladen');
    }

    public function einkauf() {
        return view('einkauf');
    }

    public function index() {
        return view('index');
    }

    public function profil() {
        return view('profil');
    }

    public function uebersicht() {
        return view('uebersicht');
    }

    public function umsaetze() {
        return view('umsaetze');
    }

    public function test() {
        return view('test');
    }




}
