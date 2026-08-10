@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3"><h1>Categorías</h1><a href="{{ route('categorias.create') }}" class="btn btn-primary">Nueva categoría</a></div>
<div class="card shadow-sm"><div class="card-body p-0"><div class="table-responsive"><table class="table table-striped table-hover mb-0"><thead><tr><th>ID</th><th>Nombre</th><th>Productos</th><th class="text-end">Acciones</th></tr></thead><tbody>
@forelse($categorias as $categoria)<tr><td>{{ $categoria->id }}</td><td>{{ $categoria->nombre }}</td><td>{{ $categoria->productos_count }}</td><td class="text-end"><a href="{{ route('categorias.edit', $categoria) }}" class="btn btn-sm btn-warning">Editar</a><form action="{{ route('categorias.destroy', $categoria) }}" method="POST" class="d-inline">@csrf @method('DELETE')<button class="btn btn-sm btn-danger" data-confirm="¿Eliminar esta categoría?">Eliminar</button></form></td></tr>
@empty<tr><td colspan="4" class="text-center py-4">No hay categorías.</td></tr>@endforelse
</tbody></table></div></div></div>
<div class="mt-3">{{ $categorias->links() }}</div>
@endsection
