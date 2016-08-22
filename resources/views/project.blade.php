@extends('layout')

@section('title')

    Unesi temu projekta:
@stop

@section('content')



    <form method="post" action="/students/">
        <div class="form-group">

        <input type="text" name="title" class="form-control" id="focusedInput">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">


        </div>

        <div class="form-group">

            <button type="submit" class="btn btn-primary">Potvrdi</button>

        </div>


    </form>



@stop