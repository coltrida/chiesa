<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function view;

class FrontController extends Controller
{
    public function index() {
        return view('front.index');
    }

    public function contatti() {
        return view('front.contatti');
    }
}
