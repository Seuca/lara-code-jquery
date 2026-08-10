@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3"><h1>Productos</h1><a href="{{ route('productos.create') }}" class="btn btn-success">Nuevo producto</a></div>
<div class="card shadow-sm"><div class="card-body p-0"><div class="table-responsive"><table class="table table-striped table-hover mb-0"><thead><tr><th>ID</th><th>Nombre</th><th>Categoría</th><th>Cantidad</th><th>Precio</th><th class="text-end">Acciones</th></tr></thead><tbody>
@forelse($productos as $producto)<tr><td>{{ $producto->id }}</td><td>{{ $producto->nombre }}</td><td>{{ $producto->categoria->nombre }}</td><td>{{ $producto->cantidad ?? 0 }}</td><td>${{ number_format((float)$producto->precio, 2, ',', '.') }}</td><td class="text-end"><a href="{{ route('productos.edit', $producto) }}" class="btn btn-sm btn-warning">Editar</a><form action="{{ route('productos.destroy', $producto) }}" method="POST" class="d-inline">@csrf @method('DELETE')<button class="btn btn-sm btn-danger" data-confirm="¿Eliminar este producto?">Eliminar</button></form></td></tr>
@empty<tr><td colspan="6" class="text-center py-4">No hay productos.</td></tr>@endforelse
</tbody></table></div></div></div><div class="mt-3">{{ $productos->links() }}</div>
@endsection
