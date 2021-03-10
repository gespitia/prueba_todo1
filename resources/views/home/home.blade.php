@extends('templateGeneral')
@section('content')
@include('productos.crearProducto')
{{-- @include('productos.eliminarProducto') --}}
<div class="col-12">
    @if (session('status'))
<div class="alert alert-success  text-center" role="alert">
   {{ session('status') }} gustavo
</div>
@endif
<div class="container my-3">
    <div class="row">
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/caja.svg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Crear Producto</h5>
                    <p class="card-text">Ingrese un nuevo producto en nuestro sistema</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearProducto">
                        Crear Producto
                    </button>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/eliminar.svg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Eliminar Producto</h5>
                  <p class="card-text">Elimine un producto. Desaparcera de su sistema</p>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#eliminarProducto">
                    Eliminar Producto
                </button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/producto.svg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Buscar Producto</h5>
                    <p class="card-text">Si desea buscar un producto en especifico</p>
                    <a href="#" class="btn btn-primary">Buscar producto</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
