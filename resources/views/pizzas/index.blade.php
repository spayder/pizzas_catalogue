@extends('welcome')

@section('content')
    <h2>List of our tasty pizzas :)</h2>

    <div class="pizzas-list">
        @foreach($pizzas as $pizza)
            <strong>{{  $pizza['name'] }}</strong>
            (
                @foreach($pizza['ingredients'] as $ingredient)
                    <small>{{ $ingredient['name'] }} </small>
                @endforeach
            ) <strong> {{ $pizza['total'] }}€ </strong>
            <br>
        @endforeach
    </div>
@endsection

@section('footer')
    <a href="{{ route('pizzas.create') }}">Add new pizza!</a> |
    <a href="{{ route('ingredients.index') }}">Show ingredients</a>
@endsection