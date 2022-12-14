@extends('inicio')
@section('contenido')

<div class="container">
    <div class="row">
        @foreach ($sondeos as $sondeo )
            
        <div class="col-12 border rounded-3 mb-5 mt-5 shadow">
            <p class="float-start text-success"> {{ $sondeo->fecha_inicio }} </p>
            <p class="float-start text-success ms-3"> {{ $sondeo->hora_inicio }} </p>
            <p class="float-end text-danger"> {{ $sondeo->fecha_cierre }} </p>
            <p class="float-end text-danger me-3"> {{ $sondeo->hora_cierre }} </p>
           <h1 class="text-center text-primary">  {{ $sondeo->tema }}</h1>

           <h3 class=""> {{ $sondeo->tipo }} </h3>
           <h5> {{ $sondeo->icono }} </h5>


           <h4 class="text-center">Inicio de preguntas</h4>
            <form class="form-control mb-3" action="">
                <label for="">#1</label>
                <input class="form-control" type="text">

                <button class="btn btn-primary m-3">Responder sondeo</button>
            </form>
        </div>
        

        @endforeach
    </div>
</div>

@endsection