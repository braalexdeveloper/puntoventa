@extends('layouts/admin')
@section('titulo','Clientes')
@section('content')
<div class="row d-flex justify-content-center">
    <h1 class="text-center">Editar Cliente</h1>
    <div class="col-12 col-sm-8 ">
        <div class="card-body">
            <form role="form" class="text-start" action="{{route('clients.update',$client)}}" method="POST">
                @csrf
                @method('PUT')
                @include('admin.client._form')

                <div class="d-flex justify-content-around">
                    <button type="submit" class="btn bg-gradient-primary w-40 my-4">Guardar</button>
                    <a href="{{route('clients.index')}}" type="button" class="btn bg-gradient-info w-40 my-4 ">Cancelar</a>
                </div>

            </form>
        </div>
    </div>
</div>
@stop