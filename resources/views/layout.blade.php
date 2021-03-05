<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fut Haunt サッカー好きの溜まり場</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
    crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
            <div class="container-fluid px-5">
                <a class="navbar-brand" href="#">Fut Haunt</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('Fut.PL') }}">PL League</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('Fut.liga') }}">LaLiga</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('Fut.serie') }}">Serie A</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('Fut.bundes') }}">Bundesliga</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <p class="text-black text-center">
                🄫Daiki-Minaguchi All Rights Reserved
            </p>        
        </div>
    </footer>
    
</body>
</html>