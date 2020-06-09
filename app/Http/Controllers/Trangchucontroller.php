<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Trangchucontroller extends Controller
{
    public function trangchu()
    {
        return view('trangchu.layout.index');
    }
}
