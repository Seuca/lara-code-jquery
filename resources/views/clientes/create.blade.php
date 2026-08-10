@extends('layouts.app')
@section('content')
<h1 class="mb-3">Nuevo cliente</h1>
<form method="POST" action="{{ route('clientes.store') }}" class="card card-body shadow-sm">@csrf
<div class="mb-3"><label class="form-label">Nombre</label><input name="nombre" value="{{ old('nombre') }}" maxlength="150" required class="form-control"></div>
<div class="mb-3"><label class="form-label">Dirección</label><input name="direccion" value="{{ old('direccion') }}" maxlength="150" class="form-control"></div>
<div class="mb-3"><label class="form-label">Teléfono</label><input name="telefono" value="{{ old('telefono') }}" maxlength="14" class="form-control"></div>
<button class="btn btn-secondary">Guardar</button> <a href="{{ route('clientes.index') }}" class="btn btn-light">Cancelar</a>
</form>
@endsection
