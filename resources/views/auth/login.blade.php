@extends('layouts.guest')

@section('content')
<h2 class="h4 mb-4">Iniciar sesión</h2>

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="mb-3">
        <label for="email" class="form-label">Correo electrónico</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" required autofocus autocomplete="username">
        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
        @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    <div class="form-check mb-4">
        <input id="remember" type="checkbox" name="remember" class="form-check-input">
        <label for="remember" class="form-check-label">Recordarme</label>
    </div>

    <div class="d-flex justify-content-between align-items-center">
        <a href="{{ route('register') }}" class="text-decoration-none">Crear una cuenta</a>
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </div>
</form>
@endsection
