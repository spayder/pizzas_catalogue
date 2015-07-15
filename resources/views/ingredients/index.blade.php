@extends('welcome')

@section('content')
    <h3>List of ingredients</h3>

    @foreach($ingredients as $ingredient)
        <li><strong>{{ $ingredient['name'] }} <small>{{ $ingredient['price'] }}€</small></strong></li>
    @endforeach
@endsection

@section('footer')
    <a href="{!! route('ingredients.create') !!}">Create new ingredient</a> |
    <a href="{!! route('pizzas.create') !!}">Create new pizza</a>
@endsection