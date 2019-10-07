<?php

namespace App\Http\Controllers;
use App\Cat;


use Illuminate\Http\Request;

class CatsController extends Controller
{
    public function showCats () {
        $cats = Cat::all();
        return view('cats')->withCats($cats);

    }
}
