@extends('layouts.app')

@section('content')
<div class="p-5 mb-4 bg-white rounded-3 shadow-sm">
    <div class="container-fluid py-3">
        <h1 class="display-6 fw-bold">Sistema de gestión</h1>
        <p class="lead">Laravel 13 + Breeze + jQuery + Bootstrap + SQLite</p>
        <div class="d-flex gap-2 flex-wrap">
            <a href="{{ route('categorias.index') }}" class="btn btn-primary">Categorías</a>
            <a href="{{ route('productos.index') }}" class="btn btn-success">Productos</a>
            <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Clientes</a>
        </div>
    </div>
</div>
@endsection
