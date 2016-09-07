@extends('layouts.content')

@section('content')

    <h3 style="margin-top: 50px">Unesi podatke studenta:</h3>

    <form method="post" action="/storeSingleStudent">
        <div class="form-group">

            <input type="text" name="name" class="form-control" id="focusedInput" placeholder="Ime i prezime">
            <br>
            <input type="text" name="index" class="form-control" id="focusedInput" placeholder="Broj indeksa">

            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">


        </div>

        <div class="form-group">

            <button type="submit" class="btn btn-primary">Potvrdi</button>

        </div>

    </form>
@stop