<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComplimentsController extends Controller
{
    public function given()
    {
        return view('compliments.given');
    }
    public function received()
    {
        return view('compliments.received');
    }
}
