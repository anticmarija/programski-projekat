@extends('layouts.content')

@section('content')


    <h3 style="margin-top: 50px">Unesi temu projekta:</h3>

    <form method="post" action="/students">
        <div class="form-group">

        <input type="text" name="title" class="form-control" id="focusedInput">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">


        </div>

        <div class="form-group">

            <button type="submit" class="btn btn-primary">Potvrdi</button>

        </div>

    </form>

    <br>


    <h3>Prijavljene teme:</h3>


    <div class="form-group">

        <input id ="input" type="text" class="form-control" placeholder="Pretraži teme...">
        <br>
        <button class="btn btn-primary" onclick="pretraga({{json_encode($teme_naslovi)}})">Pretraga</button>

    </div>



        <ul id="list" class="list-group">
            @foreach($teme as $i => $tema)

                <li id ="item{{$i}}" class="list-group-item text-info">{{++$i}}. {{$tema->title}}</li>

            @endforeach
        </ul>

    <p id="demo"></p>

@stop

@section('footer')
    @parent

    <script>

        function pretraga(teme) {

            if (teme.length==0) {

                document.getElementById("demo").innerHTML = "Nema prijavljenih tema!";
            }
            else {
                var lista = document.getElementById("list");
                var input = document.getElementById("input");

                var s = input.value;

                lista.parentNode.removeChild(lista);


                text = "<ol class='list-group'>";

                for (i = 0; i < teme.length; i++) {

                    if (teme[i].indexOf(s) != -1) {
                        text += "<li class='list-group-item'>" + teme[i] + "</li>";
                    }

                }
                text += "</ol>";

                document.getElementById("demo").innerHTML = text;

            }
        }
    </script>
@stop