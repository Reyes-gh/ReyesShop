@extends('layouts.app')

<!-- Página que muestra la opción "Mostrar" de la tabla de datos Productos del 
panel de Admin. Muestra el producto seleccionado como carta única.-->
@section('content')
    <div class="row justify-content-center">
        <div class="col-2">
            @include('components.product-card')
        </div>
    </div>
@endsection
