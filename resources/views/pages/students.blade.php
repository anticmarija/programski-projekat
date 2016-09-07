@extends('layouts.content')

@section('content')


    <h3>Prijavi tim:</h3>

    <form method="POST" action="{{ action('StudentsController@store') }}">

            <div class="form-group">

                @for($i=1; $i < 6; $i++)

                    <input type="text" name="name{{$i}}"
                           placeholder="Ime i prezime" class="form-control" id="focusedInput">

                    <input type="text" name="index{{$i}}"
                           placeholder="Broj indeksa" class="form-control" id="focusedInput">
                    <br>

                @endfor

                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                 <input type="hidden" name="project_id" value="{{$project->id}}">


            </div>

            <div class="form-group">

                <button type="submit" class="btn btn-primary">Potvrdi</button>

            </div>

    </form>

@stop