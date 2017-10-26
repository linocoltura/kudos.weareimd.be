@extends('layout')



@section('content')

    <h1>Compliments received</h1>
    <br>
    <ul>
        @foreach ($compliments as $compliment)

            <li>"<em>{{ $compliment }}</em>"</li>
            <br>
        @endforeach
    </ul>

@endsection