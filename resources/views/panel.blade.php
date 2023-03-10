@extends('layouts.app')

<!-- Esta es la página que muestra el panel de Admin si nuestra cuenta es administrador
contiene los botones para administrar productos y adminisrar usuarios -->

@section('content')
<!-- Con Bootstrap hacemos que se cree una carta para alojar las opciones de administrador
poniéndola en el centro de la pantalla para que quede bien-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Admin Panel</div>

                <!-- Para ir acorde al tema oscuro utilizaremos las propias clases de tema oscuro
            de Bootstrap-->
                <div class="card-body">
                    <div class="list-group ">
                        <a class="list-group-item list-group-item-dark" href="{{ route('products.index') }}">
                            Manejar productos
                        </a>
                        <a class="list-group-item list-group-item-dark" href="{{ route('users.index') }}">
                            Manejar usuarios
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
