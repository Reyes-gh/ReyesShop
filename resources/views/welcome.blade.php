@extends('layouts.app')
<!-- Esta es la página de bienvenida, a la cual se accede poniendo localhost:8000 -->
@section('content')
<!-- Aquí se controla si no hay productos en la tienda o en caso de haberlos mostrar por cada
uno la carta correspondiente llamando al array de productos -->
    <h1>¡Bienvenido!</h1>
    @empty ($products)
        <div class="alert alert-danger">
            Sin productos!
        </div>
    @else
        <div class="row">
 <!-- Por cada producto que tenga el array se creará una carta dentro de un div col-sm-2-->
            @foreach ($products as $product)
                <div class="col-sm-2 cartacosa">
                    @include('components.product-card')
                </div>
            @endforeach
        </div>
    @endempty
@endsection
