@extends('welcome')

@section('content')
    <h2>Create a new pizza</h2>

    {!! Form::open(['route' => 'pizzas.store']) !!}
        {!! Form::text('name') !!}
        <br>
        @foreach($ingredients as $ingredient)
            {!! Form::label($ingredient['name']) !!}
            {!! Form::checkbox('ingredients[]', $ingredient['id']) !!}
            <br>
        @endforeach
        <br>
        {!! Form::submit('Add pizza') !!}
    {!! Form::close() !!}
@endsection