<?php

namespace App\Http\Controllers;

use App\Compliment;
use Illuminate\Http\Request;

class ComplimentsController extends Controller
{
    public function given()
    {
        return view('compliments.given');
    }
    public function received()
    {
        $compliments = Compliment::all();
        return view('compliments.received', compact('compliments'));
    }
}
