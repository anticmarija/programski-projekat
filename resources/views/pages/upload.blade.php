@extends('layouts.content')

@section('content')

    <h4>Pošalji projekat:</h4>

    <br>
    {!! Form::open(array('url' => '/upload/handle', 'files' => true)) !!}


    {!!Form::file('file') !!}
    <br>
    {!! Form::submit('Pošalji')!!}

    {!! Form::close() !!}

@stop