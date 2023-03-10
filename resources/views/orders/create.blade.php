@extends('layouts.app')

<!-- Página que muestra el pedido a pagar en detalle, con los productos que contiene
y el precio a pagar de cada uno, así como cuántos productos del mismo tipo compramos.-->
@section('content')
    <h1>Detalles de pedido</h1>

    <h4 class="text-center"><strong>Total a pagar: </strong> {{ $cart->total }}</h4>

    <div class="text-center mb-3">
        <form
            class="d-inline"
            method="POST"
            action="{{ route('orders.store') }}"
        >
            @csrf
            <button type="submit" class="btn btn-success">Confirmar Pedido</button>
        </form>
    </div>

    <div class="table-responsive">
        <table class="table table-dark table-striped">
            <thead class="thead-light">
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <!-- Por cada producto que tenga el array de productos se crea una
                    nueva fila en la tabla con las características de cada producto.-->
                @foreach ($cart->products as $product)
                <tr>
                    <td>
                        <img src="{{ asset($product->images->first()->path) }}" width="100">
                        {{ $product->title }}
                    </td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->pivot->quantity }}</td>
                    <td>
                        <strong>
                            ${{ $product->total }}
                        </strong>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
