@extends('layouts.app')

<!-- Página que muestra la tabla donde se alejan todos los productos así como sus
características. Podremos Mostrar, editar o borrar el producto con los botones que
también se crean dentro de la tabla.-->
@section('content')
    <h1>Lista de productos</h1>

    <a class="btn btn-success mb-3 col-sm-2" href="{{ route('products.create') }}">Crear</a>

    <!-- En caso de no tener productos en la tabla mostrará este mensaje-->
    @empty ($products)
        <div class="alert alert-warning">
            La lista de productos está vacía
        </div>
    @else
        <div class="table-responsive col-sm-11">
            <table class="table table-dark table-striped">
                <thead class="thead-light">
                    <tr>
                        <th>Id</th>
                        <th>Título</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Status</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Recorre el array de productos, creando una nueva fila en la tabla
                        de productos con sus respectivas características. Así como los botones
                        que nos permitirán realizar las acciones CRUD-->
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->status }}</td>
                        <td>
                            <a class="btn btn-link" href="{{ route('products.show', ['product' => $product->id]) }}">Ver</a>

                            <a class="btn btn-link" href="{{ route('products.edit', ['product' => $product->id]) }}">Editar</a>

                            <form method="POST" class="d-inline" action="{{ route('products.destroy', ['product' => $product->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endempty
@endsection
