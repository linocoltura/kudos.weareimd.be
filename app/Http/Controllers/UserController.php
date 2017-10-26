<?php

namespace App\Http\Controllers;

use App\Compliment;
use App\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;


class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::find($id);
        $compliments = Compliment::where('to_id', $id)->orderBy('updated_at', 'desc')->pluck('message');
        //dd($compliments);
        return view('users.user', compact('user', 'compliments'));
    }

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();

        $user->save();

    }
}
