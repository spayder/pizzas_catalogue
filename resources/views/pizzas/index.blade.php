@extends('welcome')

@section('content')
    <h2>List of our tasty pizzas :)</h2>

    @foreach($pizzas as $pizza)
        <strong>{{  $pizza['name'] }}</strong> (
            @foreach($pizza['ingredients'] as $ingredient)
                <small>{{ $ingredient['name'] }} </small>
            @endforeach
        )
        <br>
    @endforeach
@endsection