@extends('layouts.layout')

@section('content')

    <h2>Pošalji projekat:</h2>

    <br>
    {!! Form::open(array('url' => '/upload/handle', 'files' => true)) !!}


    {!!Form::file('file') !!}
    <br>
    {!! Form::submit('Pošalji')!!}

    {!! Form::close() !!}

@stop