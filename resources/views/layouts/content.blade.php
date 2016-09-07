@extends('layouts.layout')

@section('head')
    <meta charset="UTF-8">
    <title>
        @section('title')
            test title
        @stop
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
@stop

@section('header')
    <div class="row">
        <div class="col-md-3 col-lg-offset-1">
            <h1>MPP - Projekat</h1>
        </div>

        <div class="col-md-3 col-lg-offset-1">

            <button type="button" class="btn btn-primary" style="margin-top: 25px">
                Uloguj se kao admin
            </button>

        </div>
    </div>
@stop


@section('content')
    this is my content Dekis
@stop

@section('footer')
    this is my footer deki
@stop