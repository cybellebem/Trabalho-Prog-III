<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>

    <h1>Site de filmes lindão</h1>
    <!-- Menu -->
    <div>
        <ul>
            <li><a href="{{ route('home')}} ">Home</a></li>
            <li><a href="{{ route('filmes')}}">Filmes</a></li>
        </ul>
    </div>
    <hr style="height:6px;background-color:deepskyblue">

    {{-- Conteúdo --}}
    @yield('content')

</body>
</html>
