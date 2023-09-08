@extends('layouts/admin')
@section('titulo','Productos')
@section('content')

<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h2 class="text-white text-capitalize ps-3">Productos</h2>
        </div>
      </div>
      <div class="card-header p-0 position-relative mt-4 mx-3 z-index-2">
        <a href="{{route('products.create')}}" class="btn btn-success">Crear Nuevo</a>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Id</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nombre</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Stock</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Estado
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Categoria
                </th>
               
                <th class="text-secondary opacity-7"></th>
              </tr>
            </thead>
            <tbody>
              @foreach($products as $product)
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">

                    <div class="d-flex flex-column justify-content-center">
                      <span class="mb-0 text-sm">{{$product->id}}</span>

                    </div>
                  </div>
                </td>
                <td>
                  <a href="{{route('products.show',$product)}}">
                  <span class="text-sm font-weight-bold mb-0">{{$product->name}}</span>
                  </a>
                </td>

                <td class="align-middle">
                  <span class="text-secondary text-sm font-weight-bold">{{$product->stock}}</span>
                </td>
                <td class="align-middle">
                  <span class="text-secondary text-sm font-weight-bold">{{$product->status}}</span>
                </td>
                <td class="align-middle">
                  <span class="text-secondary text-sm font-weight-bold">{{$product->category->name}}</span>
                </td>
                
                <td class="align-middle d-flex justify-content-center">
                  <a href="{{route('products.edit',$product)}}" class="btn btn-warning p-2 font-weight-bold text-xs me-2" data-toggle="tooltip" data-original-title="Edit user">
                  <i class="material-icons opacity-10">edit</i>
                  </a>
                  <form method="POST" action="{{route('products.destroy',$product)}}"  >
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger p-2 text-xs">
                    <i class="material-icons opacity-10">delete</i>
                    </button>
                  </form>

                </td>

              </tr>
              @endforeach

            </tbody>
          </table>
          
        </div>

        

      </div>
    </div>
    
  </div>
</div>

@stop