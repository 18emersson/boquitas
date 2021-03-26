@extends('adminlte::page')

@section('title', 'RecreAdultos')

@section('content_header')
    <h1 class="text-center">Actualizar Persona</h1> <br>



<form         class="needs-validation" novalidate>
@csrf
 @method('GET')

    <div class="form-row justify-content-center">
    <div class="form-group col-8">
    <label  class="form-label" for="text">Nombre</label>
    <input type="nombres" name="nombres" placeholder="Nombres Usuario" type="text" required class="form-control" value="{{$user->name}}">
    </div>

    <div class="form-group col-8">
    <label  class="form-label" for="text">Apellido</label>
    <input type="Apellido" name="apellido" placeholder="Apellido Usuario" type="text" required class="form-control" value="{{$user->apellido}}">
    </div>

    <div class="form-group col-8">
    <label  class="form-label" for="text">Correo Electronico</label>
    <input id="corre electronico" name="correo electronico" placeholder="correo electronico" type="text" required class="form-control" value="{{$user->email}}">
    </div>

    <div class="form-group col-8">
        <label  class="form-label" for="text">tipo de documento</label>
        <input id="tipo de documento" name="tipo de documento" placeholder="tipo de documento" type="text" required class="form-control" value="{{$user->tipo_documento}}">
        </div>

     <div class="form-group col-8">
            <label  class="form-label" for="text">numero de documento</label>
            <input id="numero de documento" name="numero de documento" placeholder="numero de documento" type="text" required class="form-control" value="{{$user->numero_documento}}">
            </div>


    <div class="form-group col-8">
    <label  class="form-label" for="text">Fecha Nacimiento</label>
    <input type="date" id="fecha nacimiento" name="fecha nacimiento" placeholder="fecha de nacimiento" type="text" required class="form-control" value="{{$user->fecha_nacimiento}}">
    </div>

    <div class="form-group col-8">
    <label  class="form-label" for="text">Télefono</label>
    <input id="Télefono" name="Télefono" placeholder="Télefono" type="text" required class="form-control" value="{{$user->telefono}}">
    </div>

    <div class="form-group col-8">
    <label  class="form-label" for="text">Género</label>
    <select id="Género" name="Género" placeholder="Género" type="text" required class="form-control" value="{{$user->genero}}">
        <option value="volvo">Másculino</option>
        <option value="saab">Fémenino</option>
        <option value="mercedes">Otro</option>
      </select>

    </div>


    <div class="form-group col-8 mt-3">
    <br><br>
    <button wire:click="update" class=" btn w-100  btn-primary">Actualizar</button>
    </div>

</div>
@stop


@section('content')
  {{-- traigo el componente de livewire --}}

@stop

@section('css')
    @livewireStyles
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    @livewireScripts
    <script> console.log('Hi!'); </script>
@stop
