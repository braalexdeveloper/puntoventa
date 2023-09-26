@extends('layouts/admin')
@section('titulo','Crear Cliente')
@section('content')
<div class="row d-flex justify-content-center">
    <h1 class="text-center">Registrar Cliente</h1>
    <div class="col-12 col-sm-8 ">
        <div class="card-body">
            <form role="form" class="text-start" action="{{route('clients.store')}}" method="POST">
                @csrf
                @include('admin.client._form')

                <div class="d-flex justify-content-around">
                    <button type="submit" class="btn bg-gradient-primary w-40 my-2">Guardar</button>
                    <a href="{{route('clients.index')}}" type="button" class="btn bg-gradient-info w-40 my-2 ">Cancelar</a>
                </div>

            </form>
        </div>
    </div>
</div>
@stop