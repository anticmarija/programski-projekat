@extends('layouts.content')

@section('content')

    <h3 style="margin-top: 50px">Unesi temu projekta:</h3>

    <form method="post" action="/storeAdvancedProject">
        <div class="form-group">

            <input type="text" name="name" class="form-control" id="focusedInput" placeholder="Tema projekta">
            <br>

            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

            <h3>Odaberi studente na projektu:</h3>


            @foreach($students as $student)
                <input type="checkbox" name="student[]"
                       value ="{{$student}}">{{$student->name}} {{$student->index}}
                <br>
            @endforeach

            <button type="submit" class="btn btn-primary">Potvrdi</button>
        </div>

    </form>
@stop