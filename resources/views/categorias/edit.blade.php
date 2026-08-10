@extends('layouts.app')
@section('content')
<h1 class="mb-3">Editar categoría</h1>
<form method="POST" action="{{ route('categorias.update', $categoria) }}" class="card card-body shadow-sm">@csrf @method('PUT')
<div class="mb-3"><label class="form-label">Nombre</label><input type="text" name="nombre" value="{{ old('nombre', $categoria->nombre) }}" maxlength="150" required class="form-control"></div>
<div><button class="btn btn-primary">Actualizar</button> <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Cancelar</a></div>
</form>
@endsection
