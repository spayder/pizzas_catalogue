@extends('welcome')

@section('content')
    <h2>Add new ingredient</h2>

    {!! Form::open(['route' => 'ingredients.store']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('price', 'Price') !!}
        {!! Form::text('price', null, ['class' => 'form-control']) !!}
    </div>
    {!! Form::submit('Add ingredient', ['class' => 'btn btn-primary form-control']) !!}
    {!! Form::close() !!}
@endsection