<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='csrf-token' content='{{ csrf_token() }}'>
    <title>Fut Haunt サッカー好きの溜まり場</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body style="background-color: #e3f2fd;">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light mb-1">
            <div class="container-fluid px-5">
                <a class="navbar-brand" href="#">Fut Haunt</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <!-- <a class="nav-link" aria-current="page" href="{{ route('Fut.PL') }}">PL League</a> -->
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                プレミア
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('rank', ['league'=>'PL'])}}">順位表</a></li>
                                <li><a class="dropdown-item" href="{{ route('score', ['league'=>'PL'])}}">個人成績</a></li>
                                <li><a class="dropdown-item" href="{{ route('Fut.PL') }}">掲示板</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <!-- <a class="nav-link" aria-current="page" href="{{ route('Fut.PL') }}">PL League</a> -->
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ラリーガ
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('rank', ['league'=>'LALIGA'])}}">順位表</a></li>
                                <li><a class="dropdown-item" href="{{ route('score', ['league'=>'LALIGA'])}}">個人成績</a></li>
                                <li><a class="dropdown-item" href="{{ route('Fut.laliga') }}">掲示板</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <!-- <a class="nav-link" aria-current="page" href="{{ route('Fut.PL') }}">PL League</a> -->
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                セリエ
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('rank', ['league'=>'SERIE'])}}">順位表</a></li>
                                <li><a class="dropdown-item" href="{{ route('score', ['league'=>'SERIE'])}}">個人成績</a></li>
                                <li><a class="dropdown-item" href="{{ route('Fut.serie' )}}">掲示板</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <!-- <a class="nav-link" aria-current="page" href="{{ route('Fut.PL') }}">PL League</a> -->
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ブンデス
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('rank', ['league'=>'BUNDES'])}}">順位表</a></li>
                                <li><a class="dropdown-item" href="{{ route('score', ['league'=>'BUNDES'])}}">個人成績</a></li>
                                <li><a class="dropdown-item" href="{{ route('Fut.bundes') }}">掲示板</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="navbar-nav" style= "position: absolute; right: 20px;">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">ログイン</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">会員登録</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                            ログアウト
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main style="background-color: #e3f2fd;">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container-fluid">
            <p class="text-black text-center">
                🄫Daiki-Minaguchi All Rights Reserved
            </p>        
        </div>
    </footer>
    
</body>
</html>