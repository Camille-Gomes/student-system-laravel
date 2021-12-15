<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                <a href="" class="navbar-item has-text-primary-dark">
                    Étudiants
                </a>
                <a href="{{ route('students.create') }}" class="navbar-item has-text-primary-dark">
                    Ajouter un étudiant
                </a>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
</body>
</html>