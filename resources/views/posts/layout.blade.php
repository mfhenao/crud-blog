<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD Laravel 12</title>
    <style>
        body { font-family: sans-serif; margin: 40px; background: #f4f4f4; }
        .container { background: white; padding: 20px; border-radius: 8px; }
        .success { color: green; border: 1px solid green; padding: 10px; margin-bottom: 10px; }
        input, textarea { width: 100%; margin-bottom: 10px; display: block; }
    </style>
</head>
<body>
    <nav><a href="{{ route('posts.index') }}">Inicio</a> | <a href="{{ route('posts.create') }}">Crear Post</a></nav>
    <div class="container">
        @if(session('success')) <div class="success">{{ session('success') }}</div> @endif
        @yield('content')
    </div>
</body>
</html>