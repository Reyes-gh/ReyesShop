@extends('layouts.app')

@section('content')
    <h1>Tu carrito</h1>
    @if (!isset($cart) || $cart->products->isEmpty())
        <div class="alert alert-warning">
            Tu carrito está vacío.
        </div>
    @else
        <h4 class="text-center">Total carrito <strong>{{ $cart->total }}</strong></h4>
        <a class="btn btn-success mb-3" href="{{ route('orders.create') }}">
            Tramitar pedido
        </a>
        <div class="row">
            @foreach ($cart->products as $product)
                <div class="col-2">
                    @include('components.product-card')
                </div>
            @endforeach
        </div>
    @endempty
@endsection
