@extends('layouts/admin')
@section('titulo','Registrar Producto')
@section('content')
<div class="row d-flex justify-content-center">
    <h1 class="text-center">Registrar Producto</h1>
    <div class="col-12 col-sm-8 ">
        <div class="card-body">
            <form role="form" class="text-start" action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('admin.product._form')

                <div class="d-flex justify-content-around">
                    <button type="submit" class="btn bg-gradient-primary w-40 my-2">Guardar</button>
                    <a href="{{route('products.index')}}" type="button" class="btn bg-gradient-info w-40 my-2 ">Cancelar</a>
                </div>

            </form>
        </div>
    </div>
</div>
@stop