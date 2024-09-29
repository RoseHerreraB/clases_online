<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo', 'clases_online')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header> 
        {{--incluir la barra de navegación / anclar un documento .blade.php de la carpeta layaouts--}}
        @include('layouts.navbar') 
    </header>

    <main>
        @yield('contenido',)
    </main>

    <footer>
        @include('layouts.footer')
    </footer>
    
</body>
</html>