@extends('layouts.layout')

{{-- @section('icon_title')
    <i class="fas fa-school"></i>
@endsection --}}

@section('title', 'Usuarios')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- general form elements -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Nuevo</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" name="name" class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Apellido</label>
                                    <input type="text" name="apellido" class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Tipo</label>
                                    <select class="form-control" name="tipo" required>
                                        <option value="1">Administrador</option>
                                        <option value="2">Cliente</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Correo</label>
                                    <input type="email" name="email" class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Contraseña</label>
                                    <input type="password" name="password" class="form-control" placeholder="" required>
                                </div>
                                {{-- <div class="form-group">
                                    <input type="hidden" name="tipo" class="form-control" value="1"/>
                                </div> --}}
                                {{-- <div class="form-group">
                                    <label>Roles</label>
                                    @foreach ($roles as $rol)
                                        <div class="form-check">
                                            <input type="checkbox" name="roles[]" value="{{ $rol->id }}"
                                                class="form-check-input" id="{{ $rol->name }}">
                                            <label class="form-check-label"
                                                for="{{ $rol->name }}">{{ $rol->name }}</label>
                                        </div>
                                    @endforeach
                                </div> --}}
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Guardar</button>
                                <a class="btn btn-secondary" href="{{ route('users.index') }}">Cancelar</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
