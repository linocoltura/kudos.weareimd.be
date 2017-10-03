@extends('layout')



@section('content')

    <h1>Compliments received</h1>

    <ul>
        @foreach ($compliments as $compliment)

            <li>{{ $compliment->message }}</li>

        @endforeach
    </ul>

@endsection