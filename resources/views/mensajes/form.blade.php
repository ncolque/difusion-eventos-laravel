@extends('layouts.layout')

{{-- @section('icon_title')
    <i class="fas fa-school"></i>
@endsection --}}

@section('title', 'Programar mensajes')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card {{ $reg->id ? 'card-primary' : 'card-success' }}">
                        <div class="card-header">
                            <h3 class="card-title">Nuevo</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form   @if ($reg->id) action="{{ route('mensajes.update', $reg->id) }}"
                                @else action="{{ route('mensajes.store') }}"
                                @endif
                                method="POST" enctype="multipart/form-data">
                            @csrf @if ($reg->id)
                                @method('PUT')
                            @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Asunto</label>
                                    <input type="text" name="asunto" value="{{ old('asunto', $reg->asunto) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Fecha</label>
                                    <input type="date" name="fecha" value="{{ old('fecha', $reg->fecha) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Hora del evento</label>
                                    <input type="time" name="hora" value="{{ old('hora', $reg->hora) }}" class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="user_id" class="form-control" value="{{ auth()->user()->id }}"/>
                                </div>
                                <div class="form-group">
                                    <label>Eventos</label>
                                    <select class="form-control" name="evento_id" required>
                                        @foreach ($eventos as $evento)
                                        <option value="{{$evento->id}}">{{$evento->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- <div class="form-group">
                                    <label>Materiales</label>
                                    @foreach ($mats as $mat)
                                        <div class="form-check">
                                            <input type="checkbox" name="materials[]" value="{{ $mat->id }}"
                                                class="form-check-input" id="{{ $mat->id }}">
                                            <label class="form-check-label"
                                                for="{{ $mat->id }}">{{ $mat->nom }}</label>
                                        </div>
                                    @endforeach
                                </div> --}}

                            </div>

                            <div class="card-footer">
                                <button type="submit"
                                    class="btn {{ $reg->id ? 'btn-primary' : 'btn-success' }}">Guardar</button>
                                <a class="btn btn-secondary" href="{{ route('mensajes.index') }}">Cancelar</a>
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
