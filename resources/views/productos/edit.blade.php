@extends('layouts.app')
@section('content')
<h1 class="mb-3">Editar producto</h1>
<form method="POST" action="{{ route('productos.update', $producto) }}" class="card card-body shadow-sm">@csrf @method('PUT')
<div class="mb-3"><label class="form-label">Nombre</label><input name="nombre" value="{{ old('nombre', $producto->nombre) }}" maxlength="150" required class="form-control"></div>
<div class="row"><div class="col-md-4 mb-3"><label class="form-label">Cantidad</label><input type="number" name="cantidad" value="{{ old('cantidad', $producto->cantidad) }}" class="form-control"></div><div class="col-md-4 mb-3"><label class="form-label">Precio</label><input type="number" step="0.01" min="0" name="precio" value="{{ old('precio', $producto->precio) }}" class="form-control"></div><div class="col-md-4 mb-3"><label class="form-label">Categoría</label><select name="categoria_id" required class="form-select">@foreach($categorias as $categoria)<option value="{{ $categoria->id }}" @selected(old('categoria_id', $producto->categoria_id) == $categoria->id)>{{ $categoria->nombre }}</option>@endforeach</select></div></div>
<button class="btn btn-success">Actualizar</button> <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
