@extends('layouts.app')
@section('content')
<h1 class="mb-3">Nueva categoría</h1>
<form method="POST" action="{{ route('categorias.store') }}" class="card card-body shadow-sm">@csrf
<div class="mb-3"><label class="form-label">Nombre</label><input type="text" name="nombre" value="{{ old('nombre') }}" maxlength="150" required class="form-control"></div>
<div><button class="btn btn-primary">Guardar</button> <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Cancelar</a></div>
</form>
@endsection
