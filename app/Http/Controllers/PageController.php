<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function test() {
        return view('test');
    }

    public function welcome() {
        return view('welcome');
    }
}
