@extends('layouts.content')
@section('content')

    <div class="container"></div>

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
                    <a href="#">Pogledaj broj poena</a>
                </li>
                <br>


                <br>

            </ul>
        </div>

    </div>

@stop

@section('footer')
    @parent
    novi footer
@stop