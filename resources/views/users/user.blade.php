@extends('layout')



@section('content')

    <h1>{{$user->name}}</h1>
    <img src="{{$user->avatar}}" alt="">


    <br>
    <br>
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Compliment me!</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection