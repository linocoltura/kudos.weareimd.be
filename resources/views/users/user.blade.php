@extends('layout')



@section('content')

    <h1>{{$user->name}}</h1>
    <img style="border-radius: 100%" src="{{$user->avatar}}" alt="">


    <br>
    <br>
    <div class="panel panel-default">
        <div class="panel-body">

            <form method="post" action="/compliments">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="message">Compliment me!</label>
                    <input type="text" class="form-control" id="message" name="message" placeholder="You're really rocking those pink gloves!">
                    <input type="hidden" class="form-control" id="to_id" name="to_id" value="{{$user->id}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">

            <h3>{{$user->name}}'s kudos</h3>
            <br>
            <ul>

            </ul>

        </div>
    </div>


@endsection