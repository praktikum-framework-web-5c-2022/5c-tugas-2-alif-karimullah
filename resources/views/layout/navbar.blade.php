<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title',"Online Shop")</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-secondary">
        <div class="container">
        <a class="navbar-brand" href="#">Sistem Informasi Akademik</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{request()->is('dosen')?'active':''}}" href="/dosen">Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{request()->is('mahasiswa')?'active':''}}" href="/mahasiswa">Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{request()->is('matakuliah')?'active':''}}" href="/matakuliah">Mata Kuliah</a>
                </li>
                <section>
        <div class="container">
            @yield('pembatas')
        </div>
    </section>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

            </ul>
        </div>
    </nav>

    @yield('content')

</body>
</html>