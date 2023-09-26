@extends('layouts/admin')
@section('titulo','Crear Compra')
@section('content')
<div class="row d-flex justify-content-center">
    <h1 class="text-center">Registrar Compra</h1>
    <div class="col-12 col-sm-8">
        <div class="card-body">
            <form role="form" class="text-start d-flex  justify-content-between flex-wrap" action="{{route('purchases.store')}}" method="POST">
                @csrf
                @include('admin.purchase._form')

                <div class="d-flex justify-content-around col-12">
                    <button type="submit" class="btn bg-gradient-primary w-40 my-2">Guardar</button>
                    <a href="{{route('purchases.index')}}" type="button" class="btn bg-gradient-info w-40 my-2 ">Cancelar</a>
                </div>

            </form>
        </div>
    </div>
</div>
@stop