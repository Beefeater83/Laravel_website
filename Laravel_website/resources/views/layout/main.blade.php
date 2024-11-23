<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">      
    <script src="https://kit.fontawesome.com/5b4bf168f0.js" crossorigin="anonymous"></script> 
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- CSRF Token -->
    <script src="{{ mix('js/app.js') }}" defer></script>  <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('page-title')</title>
</head>
<body>
    <header class="container">
        <span class="logo">Blog Spot</span>
        <nav>
            <a href="/">Головна</a>
            <a href="/about-us">Про нас</a>
                        
            @guest
                <a href="/login">Увійти</a>
                <a href="/register">Реєстрація</a>             
                @else
                <a href="/article/add">Додати статтю</a>
                <a href="/user" class="login">{{ Auth::user()->name }}</a>
                
                    
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="logout">Вийти</button>
                </form>                    
            @endguest
        </nav>
    </header>
    <main class="container">
        @include('blocks/messages')
        @yield('content')
    </main>
    <footer>Всі права захищені</footer>
</body>
</html>