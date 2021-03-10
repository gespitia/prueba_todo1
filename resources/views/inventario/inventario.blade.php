@extends('templateGeneral')
@section('content')

<div class="container my-3">
    <div class="row">
        <div class="col-6">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/caja.svg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ingresar Existencia</h5>
                    <p class="card-text">Ingrese un nuevo producto en nuestro</p>
                    <a href="#" class="btn btn-primary">Nuevo Producto</a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/caja.svg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Salida por compra</h5>
                    <p class="card-text">Ingrese un nuevo producto en nuestro</p>
                    <a href="#" class="btn btn-primary">Nuevo Producto</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-6">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/eliminar.svg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Devolucion Comprar</h5>
                  <p class="card-text">Elimine un producto. Desaparcera de su sistema</p>
                  <a href="#" class="btn btn-primary">Eliminar producto</a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/producto.svg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Devolucion en ventas</h5>
                    <p class="card-text">Si desea buscar un producto en especifico</p>
                    <a href="#" class="btn btn-primary">Buscar producto</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
