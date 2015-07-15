@extends('welcome')

@section('content')
    <h2>Create a new pizza</h2>

    {!! Form::open(['route' => 'pizzas.store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Pizza\'s name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('ingredients', 'Pick an ingredients') !!}
            <br>
            @foreach($ingredients as $ingredient)
                {!! Form::label($ingredient['name']) !!}
                {!! Form::checkbox('ingredients[]', $ingredient['id']) !!}
                <br>
            @endforeach
        </div>
        {!! Form::submit('Add pizza', ['class' => 'btn btn-primary form-control']) !!}
    {!! Form::close() !!}
@endsection

@section('footer')
    <a href="{!! route('ingredients.create') !!}">Add new ingredient</a>
@endsection