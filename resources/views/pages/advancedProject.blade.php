@extends('layouts.content')

@section('content')

    <h3 style="margin-top: 50px">Unesi temu projekta:</h3>

    <form method="post" action="{{ action('AdvancedProjectController@storeAdvancedProject') }}">
        <div class="form-group">

            <input type="text" name="title" class="form-control" id="focusedInput" placeholder="Tema projekta">
            <br>

            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

            <h3>Odaberi studenta na projektu:</h3>


            @if (count($students) === 0)
                <p>Nema prijavljenih studenata!</p>
            @else

                <select name="student">
                    @foreach($students as $student)
                    <option value="{{$student}}">{{$student->name}} {{$student->index}}</option>
                    <br>
                    @endforeach
                </select>

            @endif

            <button type="submit" class="btn btn-primary">Potvrdi</button>
        </div>

    </form>
@stop