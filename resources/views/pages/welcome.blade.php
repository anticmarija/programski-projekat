@extends('layouts.content')

@section('head')

    @parent

@stop
@section('content')

        <div style="margin-top: 100px">
            <ul class="nav nav-pills nav-stacked">

                <li class="text-center" style="background-color: lightgrey">
                    <a href="{{action('ProjectController@create')}}">Prijavi projekat</a>
                </li>
                <br>

                <li class="text-center" style="background-color: lightgrey">
                    <a href="/upload">Pošalji projekat</a>
                </li>
                <br>

                <li class="text-center" style="background-color: lightgrey" >
                    <a href="/singleStudent">Prijavi studenta</a>
                </li>
                <br>

                <li class="text-center" style="background-color: lightgrey" >
                    <a href="#">Dodeli studenta projektu</a>
                </li>
                <br>


                <br>

            </ul>
        </div>


@stop
@section('footer')

@stop