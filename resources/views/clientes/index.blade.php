@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3"><h1>Clientes</h1><a href="{{ route('clientes.create') }}" class="btn btn-secondary">Nuevo cliente</a></div>
<div class="card shadow-sm"><div class="card-body p-0"><div class="table-responsive"><table class="table table-striped table-hover mb-0"><thead><tr><th>ID</th><th>Nombre</th><th>Dirección</th><th>Teléfono</th><th class="text-end">Acciones</th></tr></thead><tbody>
@forelse($clientes as $cliente)<tr><td>{{ $cliente->id }}</td><td>{{ $cliente->nombre }}</td><td>{{ $cliente->direccion }}</td><td>{{ $cliente->telefono }}</td><td class="text-end"><a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-sm btn-warning">Editar</a><form action="{{ route('clientes.destroy', $cliente) }}" method="POST" class="d-inline">@csrf @method('DELETE')<button class="btn btn-sm btn-danger" data-confirm="¿Eliminar este cliente?">Eliminar</button></form></td></tr>
@empty<tr><td colspan="5" class="text-center py-4">No hay clientes.</td></tr>@endforelse
</tbody></table></div></div></div><div class="mt-3">{{ $clientes->links() }}</div>
@endsection
