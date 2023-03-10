@extends('layouts.app')

<!-- Esta es la página a la que nos envía una vez accedemos al panel de admin para ver
la lista de usuarios que existen así como sus atributos-->
@section('content')
    <h1>Lista de usuarios</h1>

    <!-- Si no hay usuarios mostrará este mensaje -->
    @empty ($users)
        <div class="alert alert-warning">
            La lista de usuarios está vacía
        </div>
    @else
    <div class="align-self-center col-sm-11">
        <div class="table-responsive align-items-center">
            <table class="table table-dark table-striped">
                <thead class="thead-light">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Admin desde</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Por cada usuario que tenga el array se hará una nueva fila
                en la tabla usuarios con sus correspondientes características-->
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <!-- Aquí mostrará si es admin o no y desde cuando-->
                            {{ optional($user->admin_since)->diffForHumans() ?? 'Never' }}
                        </td>
                        <td>
                            <!-- Este botón sirve para dar o revocar permisos de administrador a un usuario -->
                            <form method="POST" class="d-inline" action="{{ route('users.admin.toggle', ['user' => $user->id]) }}">
                                @csrf
                                <button type="submit" class="btn btn-link">
                                    {{ $user->isAdmin() ? 'Quitar permisos de' : 'Dar permisos de' }}
                                    Admin
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
        
    @endempty
@endsection
