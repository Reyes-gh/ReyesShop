@extends('layouts.app')

<!-- Página que muestra el formulario para crear un producto. Manda la señal POST a la 
ruta de la tienda de productos.-->
@section('content')
    <h1>Crear un producto</h1>

    <!-- Creación del formulario con los campos para introducir las características
        del producto.-->
    <form
        method="POST"
        action="{{ route('products.store') }}"
        enctype="multipart/form-data"
    >
        @csrf
        <div class="form-row">
            <label>Titulo</label>
            <input class="form-control" type="text" name="title" value="{{ old('title') }}" required>
        </div>
        <div class="form-row">
            <label>Descripcion</label>
            <input class="form-control" type="text" name="description" value="{{ old('description') }}" required>
        </div>
        <div class="form-row">
            <label>Precio</label>
            <input class="form-control" type="number" min="1.00" step="0.01" name="price" value="{{ old('price') }}" required>
        </div>
        <div class="form-row">
            <label>Stock</label>
            <input class="form-control" type="number" min="0" name="stock" value="{{ old('stock') }}" required>
        </div>
        <div class="form-row">
            <label>Status</label>
            <select class="custom-select" name="status" required>
                <option value="" selected>Seleccionar...</option>
                <option {{ old('status') == 'available' ? 'selected' : '' }} value="available">Disponible</option>
                <option {{ old('status') == 'unavailable' ? 'selected' : '' }} value="unavailable">No disponible</option>
            </select>
        </div>
        <div class="form-row">
            <label>
                {{ __('Images') }}
            </label>

            <div class="custom-file">
                <input type="file" accept="image/*" name="images[]" class="custom-file-input" multiple>
                <label class="custom-file-label">
                    Imagenes de producto...
                </label>
            </div>
        </div>
        <div class="form-row mt-3">
            <button type="submit" class="btn btn-primary btn-lg">Crear producto</button>
        </div>
    </form>
@endsection
