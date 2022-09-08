@extends('inicio')

@section('contenido')
<!-- Aca comienza el index del usuario, donde podra registrarse-->
<div id="Background"  class=" container-lg container-sm  ">
    <h3 class="text-center fw-2 "> Registro Ciudadanos</h3>

    @if (session('status'))
        <p class="text-success text-center fw-bold fs-2">{{ session('status') }}</p>
    @endif

    <p class="text-center">Aviso: Todos los campos que se van a llenar en sondeo son obligatorios </p>
    <div class="container  ">

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal4">
            Crear Grupo Preguntas
        </button>
        
        <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Creacion de grupo preguntas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    En este segmento, usted creara los grupos para asociar las preguntas
                    <form action="{{ route('registrarGrupoPregunta') }}" method="post" >
                        @csrf
                    
                        <label class="form-label" for="" >nombre del grupo pregunta</label>
                        <input name="nombreGrupo" class="form-control" type="text" >
                        <button type="submit" class="btn btn-success">Guardar grupo</button>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
            </div>
        </div>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Crear preguntas
        </button>
        
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Creacion de preguntas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form  method="post" action="{{ route('registrarPregunta') }}">
                        @csrf
                    En este segmento, usted creara las preguntas que considere para el sondeo
                    

                    <label for="">seleccione el grupo de preguntas</label>
                    <select name="grupopreguntas_id" class="form-select" id="">
                        @foreach ($grupospreguntas as $grupo )
                            <option value="{{ $grupo->id }}"> {{ $grupo->nombreGrupo }} </option>
                        @endforeach
                    </select>
                        <label class="form-label" for="" >Pregunta</label>
                        
                        <input name="nombre_pregunta" class="form-control" type="text" required>
                        <button type="submit" class="btn btn-success"> guardar pregunta </button>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
                
                
            </div>
        </div>
    
            </div>
        </div>


        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
            Crear respuestas
        </button>
        
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Creacion de respuestas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    En este segmento, usted creara las respuestas de cada pregunta que considere para el sondeo
                    <form action="{{ route('registrarRespuesta') }}" method="post" >
                        @csrf
                        <label for="">seleccione la pregunta para hacer la respuesta    </label>
                        <select required class="form-select my-2" name="preguntas_idpreguntas" id="" >
                            @foreach ($preguntas as $pregunta )
                                <option value=" {{ $pregunta->id }} "> {{ $pregunta->nombre_pregunta }} </option>
                            @endforeach
                        </select>
                        <label class="form-label" for="" >Opcion</label>
                        <input name="respuesta" class="form-control" type="text" required>
                        <button type="submit" class="btn btn-success">Guardar opcion</button>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
            </div>
        </div>

         {{-- Filtro --}}
         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
            Crear filtro
        </button>
        
        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Creacion de preguntas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Seleccione o cree el filtro del sondeo
                    <form action="{{ route('registrarFiltro') }}" method="post" >
                        @csrf
                        {{-- Edad inicial del sondeo --}}
                        <label class="form-label" for="" >Rango inicial de edad del sondeo</label>
                        <input name="edad_inicio" class="form-control" type="number" required>

                        {{-- Edad final del sondeo --}}
                        <label class="form-label" for="" >Rango final de edad del sondeo</label>
                        <input name="edad_final" class="form-control" type="number" required>

                        {{-- Comuna selecta del sondeo --}}
                        <label class="form-label" for="" >Comuna selecta del sondeo</label>
                        <input name="comuna" class="form-control" type="text" required>

                        {{-- Barrio selecta del sondeo --}}
                        <label class="form-label" for="" >Barrio selecta del sondeo</label>
                        <input name="barrio" class="form-control" type="text" required>

                        {{-- Organizacion selecta del sondeo --}}
                        <label class="form-label" for="" >Organizacion selecta del sondeo</label>
                        <input name="organizacion" class="form-control" type="text" required>

                        <label for="">grupo poblacional </label>
                        <select required class="form-select my-2" name="grupo_poblacional_idgrupo_poblacional" id="" required>     
                            <option value="1">Mestizos</option>
                            <option value="2">Caucásicos</option>
                            <option value="3">Afrocolombianos</option>
                            <option value="4">Palenqueros</option>
                            <option value="5">Raizales</option>
                            <option value="6">Indígenas</option>
                        </select>
                        <button type="submit" class="btn btn-success">Guardar filtros</button>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
            </div>
        </div>


    <form class="w-auto form-control w-50 rounded-3 border-dark shadow" method="post" action="{{ route('registrarSondeos') }}" enctype="multipart/form-data">
        @csrf

        <!--Tema de sondeo-->
        @error('tema')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        
        <label class="form-label my-2" for="">Tema del sondeo</label>
        <input name="tema" class="form-control" placeholder="Escriba el tema del sondeo" required type="text">

        {{-- Fechas iniciales --}}
        <div class="my-5">
            <p class="border-top border-bottom border-dark text-center text-primary fw-bold">Fecha y hora inicial del sondeo</p>
        </div>

        <!--Fecha de inicio del sondeo -->
        @error('fecha_inicio')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        
        <label class="form-label my-2 " for="">Fecha de inicio del sondeo</label>
        <input name="fecha_inicio" class="form-control" type="date" required>

        <!--Hora de inicio del sondeo-->
        @error('hora_inicio')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <label class="form-label my-2" for="">Hora de inicio del sondeo </label>
        <input name="hora_inicio" class="form-control" type="time" required>

        <!--Tipo de sondeo-->

        @error('tipo')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <label class="form-label my-2" for="">Tipo de sondeo</label>
        <input name="tipo" placeholder="El tipo de sondeo es diferente al tema" class="form-control" type="text" required>

        <!-- Fechas finales -->
        <div class="my-5">
            <p class="border-top border-bottom border-dark text-center text-primary fw-bold">Fecha y hora de cierre de sondeo</p>
        </div>

        {{-- Fecha de cierre --}}

        @error('fecha_cierre')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <label class="form-label" for="">Fecha de cierre del sondeo</label>
        <input name="fecha_cierre" class="form-control" type="date" required>

        {{-- Hora de cierre --}}
        @error('hora_cierre')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        
        <label class="form-label" for="">Hora de cierre del sondeo</label>
        <input name="hora_cierre" class="form-control" type="time" required>

        {{-- Icono o imagen del sondeo --}}
        @error('icono')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <label class="form-label" for="">Agregue una imagen aqui</label>
        <input name="icono" class="form-control" type="file"  id="" required>

        <!-- Fechas de publicacion -->
        <div class="my-5">
            <p class="border-top border-bottom border-dark text-center text-primary fw-bold">Fecha y hora de publicacion del sondeo
        </div>

        {{-- Fecha de cierre --}}

        @error('fecha_pub')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <label class="form-label" for="">Fecha de publicacion del sondeo</label>
        <input name="fecha_pub" class="form-control" type="date" required>

        {{-- Hora de cierre --}}
        @error('hora_pub')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        
        <label class="form-label" for="">Hora de publicacion del sondeo</label>
        <input name="hora_pub" class="form-control" type="time" required>

        <div class="my-5">
            <p class="border-top border-bottom border-dark text-center text-primary fw-bold">Preguntas y opciones del sondeo</p>
        </div>

        <!--Preguntas y opciones del sondeo--> 
        @error('preguntas_idpreguntas')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        
        <label class="form-label" for="">Seleccione el filtro anteriormente creado</label>
        <select class="form-select" name="filtro_idfiltro" id="">

            @foreach ($filtros as $filtro )
            <option value="{{ $filtro->id }}"> {{ $filtro->organizacion }} </option>
            @endforeach
            
        </select>
            
        {{-- <label for="">Preguntas y opciones</label>
        <select required class="form-select my-2" name="preguntas_idpreguntas" id="" required>
            @foreach ($preguntas as $pregunta )
                
            @endforeach
        </select> --}}

        <label for="">selecciona el grupo de preguntas que configuraste para este sondeo</label>
        <select name="grupopreguntasid" class="form-select" id="">

            @foreach ($grupospreguntas as $grupo )
            <option value="{{ $grupo->id }}">
                {{ $grupo->nombreGrupo }} 
            </option>
            @endforeach
        </select>

        {{-- Confirmacion de voto o participacion en el sondeo --}}
        @error('confirmacion_voto_idconfirmacion_voto')
            <p class="text-danger">{{ $message }}</p>
         @enderror

       
        <div class="my-5">
            <p class="border-top border-bottom border-dark text-center text-primary fw-bold">Condicion</p>
        </div>              

        {{-- Condiciones del sondeo, en los que se aclara proposito y utilidades del sondeo al ciudadano --}}
        @error('condicion_idcondicion')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <label for="" class="form-label my-2">Condiciones del sondeo</label>
        <textarea  name="condicion_idcondicion"  class="form-control" type="textarea"></textarea>

        {{-- Confirmacion de la participacion por parte del ciudadano --}}
        <label class="form-label my-2" for="">Confirmacion de participacion</label>
        <p class="my-2">Usted confirma su participacion en este sondeo?</p>
        <select required class="form-select my-2" name="confirmacion_voto_idconfirmacion_voto" id="">
            <option value="1">Si, confirmo que quiero participar en este sondeo</option>
            <option value="2">No, declino mi participacion en este sondeo </option>
        </select>

        <button type="submit" class="btn btn-primary my-2 mx-2 d-block mx-auto mb-3">Registrar informacion</button>

    </form>
</div>
</div>
</section>

@endsection