<!DOCTYPE html>
<html lang="en">

<head>
    <!-- 'yield', com @, faz parte da sintaxe de 'hooks' do laravel -->
    <!-- 'yield' é um 'placeholder', quer dizer 'insira algo aqui, neste local' -->
    <title>@yield('title')</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>

    <header>
        @include('includes.header')
    </header>
    <!-- é quase como 1 component, inserido nesse local... no caso, é o nosso header... -->

    <div class="container">
        @yield('content')
    </div>

</body>

</html>
