@extends('layouts.app')
@section('content')
<h1 class="mb-3">Editar cliente</h1>
<form method="POST" action="{{ route('clientes.update', $cliente) }}" class="card card-body shadow-sm">@csrf @method('PUT')
<div class="mb-3"><label class="form-label">Nombre</label><input name="nombre" value="{{ old('nombre', $cliente->nombre) }}" maxlength="150" required class="form-control"></div>
<div class="mb-3"><label class="form-label">Dirección</label><input name="direccion" value="{{ old('direccion', $cliente->direccion) }}" maxlength="150" class="form-control"></div>
<div class="mb-3"><label class="form-label">Teléfono</label><input name="telefono" value="{{ old('telefono', $cliente->telefono) }}" maxlength="14" class="form-control"></div>
<button class="btn btn-secondary">Actualizar</button> <a href="{{ route('clientes.index') }}" class="btn btn-light">Cancelar</a>
</form>
@endsection
