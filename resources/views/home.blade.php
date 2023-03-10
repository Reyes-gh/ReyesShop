@extends('layouts.app')

<!-- Esta es la clase a donde nos envían una vez nos hemos logueado -->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Te has logeado!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
