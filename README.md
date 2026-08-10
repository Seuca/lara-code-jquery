# lara-code-jquery

Proyecto CRUD con:

- Laravel 13
- Laravel Breeze (autenticación)
- jQuery
- Bootstrap 5
- Vite
- SQLite
- PHP 8.3+

## Entidades

### CATEGORIAS

- `id`
- `nombre` VARCHAR(150) NOT NULL

Relación: una categoría tiene muchos productos.

### PRODUCTOS

- `id`
- `nombre` VARCHAR(150) NOT NULL
- `cantidad` INTEGER NULL
- `precio` DECIMAL(8,2) NULL
- `categoria_id` FK a `categorias.id`

### CLIENTES

- `id`
- `nombre` VARCHAR(150) NOT NULL
- `direccion` VARCHAR(150) NULL
- `telefono` VARCHAR(14) NULL

## Instalación

```bash
composer install
cp .env.example .env
php artisan key:generate
```

En Windows PowerShell, si `cp` no está disponible:

```powershell
Copy-Item .env.example .env
```

Crear o verificar la base SQLite:

```bash
php artisan migrate
```

Instalar Breeze:

```bash
php artisan breeze:install blade
```

Después instalar las dependencias frontend:

```bash
npm install
npm run build
```

Para desarrollo:

```bash
composer run dev
```

## Bootstrap + jQuery

Breeze genera inicialmente sus archivos de autenticación. El proyecto utiliza Bootstrap 5 y jQuery como stack frontend principal; `resources/js/app.js` registra jQuery globalmente y carga Bootstrap.

Si Breeze vuelve a generar estilos basados en Tailwind, conservar la autenticación generada y utilizar `resources/css/app.css` como hoja principal del proyecto.

## CRUD

- `/categorias`
- `/productos`
- `/clientes`

Los controladores utilizan validación de Laravel, route model binding y relaciones Eloquent.

## Relación Eloquent

```php
Categoria::hasMany(Producto::class)
Producto::belongsTo(Categoria::class)
```

Una categoría no puede eliminarse mientras tenga productos asociados.
