@extends('inicio')

@section('contenido')
    
<div id="Background"  class=" container-lg container-sm  ">
    <h3 class="text-center fw-2 "> Registro Ciudadanos</h3>

    @if (session('success'))
        <p class="text-succes">{{ session('success') }}</p>
    @endif

    <p class="text-center">Todos los campos con un  <span class="text-danger fs-2">*</span> Son obligatorios </p>
    <div class="container  d-flex justify-content-center align-items-center">
   

    <form class=" w-auto form-control w-50 rounded-3 border-dark shadow" method="post" action=" {{ route('registrarCiudadano') }} ">
        @csrf

        <div class="my-5">
            <p class="border-top border-bottom border-dark text-center text-primary fw-bold">Identificacion</p>
        </div>
        <!--Tipo de documento--> 
        @error('TipoDocumento')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <label for="">Tipo de documento</label><span class="float-end text-danger fs-2">*</span>
        <select required class="form-select my-2" name="TipoDocumento" id="">
            <option value="1">Cedula de ciudadania</option>
            <option value="2">Tarjeta de identidad</option>
            <option value="3">Cédula de extranjería</option>
        </select>
        
        @error('numeroDocumento')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <!--Numero-->
        <label class="form-label my-2" for="">Numero de documento</label><span class="float-end text-danger fs-2">*</span>
        <input name="numeroDocumento" class="form-control" placeholder="Solo numeros sin puntos" required type="number">

        @error('nombres')
        <p class="text-danger">{{ $message }}</p>
    @enderror
        <!--Nombres y apellidos -->
        <label class="form-label my-2 " for="">Nombre Completo</label><span class="float-end text-danger fs-2">*</span>
        <input name="nombres" class="form-control" type="text">
        @error('apellidos')
        <p class="text-danger">{{ $message }}</p>
    @enderror
        <label class="form-label my-2" for="">Apellidos </label><span class="float-end text-danger fs-2">*</span>
        <input name="apellidos" class="form-control" type="text">

        <!--Sexo-->

        @error('sexo')
        <p class="text-danger">{{ $message }}</p>
    @enderror
        <label class="form-label " for="">Sexo</label>
        <select class="form-select" name="sexo" id="">
            <option value="1">Hombre</option>
            <option value="2">Mujer</option>
            <option value="3">Intersexual</option>
            <option value="4">Indefinido</option>
            <option value="5">Prefieren no decir</option>
        </select>

<!--Contacto 

-->
        <div class="my-5">
            <p class="border-top border-bottom border-dark text-center text-primary fw-bold">Contacto</p>
        </div>


        <label class="form-label" for="">Telefono Celular</label>
        <input name="tel_celular" class="form-control" type="tel">
        <label class="form-label" for="">Telefono Fijo</label>
        <input name="tel_fijo" class="form-control" type="tel">
        @error('correo_elec')
        <p class="text-danger">{{ $message }}</p>
    @enderror
        <label class="form-label" for="">Correo electronico</label><span class="float-end text-danger fs-2">*</span>
        <input name="correo_elec" class="form-control"type="email"  id="">


        <!--Geografia
        Municipio *
3.2 Dirección
3.3 Barrio-vereda *
        -->
        <div class="my-5">
            <p class="border-top border-bottom border-dark text-center text-primary fw-bold">Geografia</p>
        </div>

        @error('municipio')
        <p class="text-danger">{{ $message }}</p>
    @enderror

    <label for="" class="form-label my-2">Municipio</label><span class="float-end text-danger fs-2">*</span>
    <input name="municipio" class="form-control" type="text" required>


    @error('direccion')
    <p class="text-danger">{{ $message }}</p>
@enderror
    <label for="" class="form-label my-2">Dirección</label>
    <input name="direccion" class="form-control" type="text" required>

    @error('barrio-vereda')
    <p class="text-danger">{{ $message }}</p>
@enderror

    <label for="" class="form-label my-2">Barrio-vereda</label><span class="float-end text-danger fs-2">*</span>
    <input name="barrio" class="form-control" type="text" required>





    <!--4. ENFOQUE DIFERENCIAL
4.1 Fecha de nacimiento *
AAAA-MM-DD
4.2 Etnia *
5. E-->    
<div class="my-5">
<p class="border-top border-bottom border-dark text-center text-primary fw-bold">Enfoque</p>
</div>              

@error('fecha_nac')
<p class="text-danger">{{ $message }}</p>
@enderror
        <label for="" class="form-label my-2">Fecha de nacimiento</label><span class="float-end text-danger fs-2">*</span>
        <input name="fecha_nac" placeholder="AAAA-MM-DD" class="form-control" type="text">

        <label class="form-label my-2" for="">Etnia</label><span class="float-end text-danger">*</span>

        <select  class="form-select my-2" name="etnia" id="">
            <option value="Mestizos">Mestizos</option>
            <option value="Caucásicos">Caucásicos</option>
            <option value="Afrocolombianos">Afrocolombianos</option>
            <option value="Palenqueros">Palenqueros</option>
            <option value="Raizales">Raizales</option>
            <option value="Indígenas">Indígenas</option>
        </select>

        <div class="my-5">
            <p class="border-top border-bottom border-dark text-center text-primary fw-bold">Enfoque Poblacional</p>
        </div>  


        @error('cond_discapacitado')
        <p class="text-danger">{{ $message }}</p>
    @enderror

        <label class="form-label my-2" for="">Se encuentra en condicion de Discapacitado?  </label><span class="float-end text-danger fs-2">*</span>
        <select name="cond_discapacitado" required class="form-select" name="Discapacitado" id="">
            <option value="Si">Si</option>
            <option value="No">No</option>
        </select>

        <!--Estado socioeconomico-->

        <div class="my-5">
            <p class="border-top border-bottom border-dark text-center text-primary fw-bold">SocioEconomico</p>
        </div>  

        @error('estrato')
        <p class="text-danger">{{ $message }}</p>
    @enderror
        <label class="form-label my-2" for="">Seleccione su Estrato Socio-Economico</label><span class="float-end text-danger fs-2">*</span>
        <select name="estrato"  class="form-select"  id="">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>

        <!--Educacion-->

        @error('nivel_edu')
        <p class="text-danger">{{ $message }}</p>
    @enderror
        <label class="form-label my-2" for="">Ultimo nivel de Educacion alcanzado</label>
        <select name="nivel_edu" class="form-select" name="" id="">
            <option value=""></option>
            <option value="1">Jardin</option>
            <option value="2">Primaria</option>
            <option value="3">Bachiller</option>
            <option value="4">Tecnico</option>
            <option value="5">Tecnologo</option>
            <option value="6">Universidad</option>
            <option value="7">Maestria</option>
        </select>


        <!--Conectividad-->

        <div class="my-5">
            <p class="border-top border-bottom border-dark text-center text-primary fw-bold" >Conectividad</p>
        </div>  



        <label class="form-label my-2" for="">8.1 ¿Cuenta con acceso a dispositivos tecnológicos? </label><span class="float-end text-danger fs-2">*</span>
        
        <div class="d-flex my-2">
            @error('accesodispositivos')
            <p class="text-danger">{{ $message }}</p>
        @enderror
            <select class="form-select" name="accesodispositivos" id="">
                <option value="si">Si</option>
                <option value="no">No</option>
            </select>
            
        </div>

        <label class="my-2 form-label" for="">Si su respuesta fue si, ¿cuál o cuáles utiliza?</label><span class="float-end text-danger fs-2">*</span>
        @error('dispositivos_tecno')
        <p class="text-danger">{{ $message }}</p>
    @enderror
        <select required multiple class="form-select " name="dispositivos_tecno" id="">
            <option value="1">Telefono Movil</option>
            <option value="2">Computador</option>
            <option value="3">Tablet</option>
            <option  value="4">Otro cual? </option>
        </select>

        <label class="form-label" for=""></label>
        <input name="otrodispositivo" class="form-control d-none " placeholder="Escribe cual otro dispositivos" type="text">

        @error('conectividad')
            <p class="text-danger"> {{ $message }}</p>
        @enderror
        <label for="">Cuenta con conectividad a internet?</label>
        <div class="d-flex my-2">
            
            <select class="form-select" name="conectividad" id="">
                <option value="si">Si</option>
                <option value="no">No</option>
            </select>
            
        </div>

        <div class="my-5">
            <p class="border-top border-bottom border-dark text-center text-primary fw-bold">Salud</p>
        </div>  
        @error('afiliacion')
            <p class="text-danger"> {{ $message }}</p>
        @enderror

        <!--Salud-->
        <label class="form-label my-2" for="">Tipo de regimen de afiliacion</label>
        <select class="form-select" name="afiliacion" id="">
            <option value="Subsidiado">Subsidiado</option>
            <option value="contributivo">contributivo</option>
        </select>

        <button type="submit" class="btn btn-primary my-2 mx-2 d-block mx-auto mb-3">Registrar informacion</button>
    </form>
</div>
</div>
</section>

@endsection