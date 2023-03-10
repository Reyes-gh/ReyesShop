@extends('layouts.app')

<!-- Página que muestra la confirmación del pago del carrito -->
@section('content')
    <h1>Detalles de pago</h1>
    <!-- El precio a pagar se recoge de la variabel $order la cual almacena la suma
        de todo el dinero a pagar por los productos del carrito-->
    <h4 class="text-center"><strong>Total a pagar: </strong> {{ $order->total }}</h4>

    <div class="text-center mb-3">
        <form
            class="d-inline"
            method="POST"
            action="{{ route('orders.payments.store', ['order' => $order->id]) }}"
        >
            @csrf
            <button type="submit" class="btn btn-success">Pagar</button>
        </form>
    </div>
@endsection
