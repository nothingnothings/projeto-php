<!DOCTYPE html>
<html lang="en">

<head>
    <!-- 'yield', com @, faz parte da sintaxe de 'hooks' do laravel -->
    <!-- 'yield' é um 'placeholder', quer dizer 'insira algo aqui, neste local' -->
    <title>@yield('title')</title>
</head>

<body>
    <div class="container">
        @yield('content')
    </div>

</body>

</html>
