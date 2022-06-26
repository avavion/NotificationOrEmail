<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>

<header>
    <div class="container">
        <nav class="nav">
            <ul class="menu">
                <li class="menu__item">
                    <a href="{{ route('orders.all') }}" class="menu__link">
                        Все заказы
                    </a>
                </li>

                <li class="menu__item">
                    <a href="{{ route('orders.create') }}" class="menu__link">
                        Создать
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>

@yield('content')


</body>
</html>
