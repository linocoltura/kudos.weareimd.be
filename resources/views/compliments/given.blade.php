@extends('layout')



@section('content')

    <h1>Compliments given</h1>
    <br>
    <ul>
        @foreach ($compliments as $compliment)

            <li>"<em>{{ $compliment->message }}</em>" to <b>{{App\User::find($compliment->to_id)->name}}</b></li>
            <br>
        @endforeach
    </ul>

@endsection