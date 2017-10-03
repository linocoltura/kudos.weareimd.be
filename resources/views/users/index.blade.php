@extends('layout')



@section('content')

    <h1>Users</h1>

    <ul>
        @foreach ($users as $user)

            <li>
                <h2>{{ $user->name }}</h2>
                <a href="/users/{{$user->id}}"><img src="{{ $user->avatar }}" alt=""></a>
            </li>

        @endforeach
    </ul>

@endsection