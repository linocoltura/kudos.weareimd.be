<?php

namespace App\Http\Controllers;

use App\Compliment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function store()
    {


        $compliment = new Compliment;
        $compliment->to_id = request('to_id');
        $compliment->message = request('message');
        $compliment->from_id = Auth::user()->id;

        $compliment->save();

        return redirect('/users/' . request('to_id'));
    }
}
