<!doctype html>
<html lang="en">

<body class="bg-light">
    <nav class="navbar bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('buku.index') }}">Tugas Modul 2 - Kelompok 19 Praktikum SBD
            </a>
        </div>
    </nav>
</body>

<body class="bg-light" style="background-image: url('https://images.pexels.com/photos/2559941/pexels-photo-2559941.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
    <main class="container">
        @include('komponen.pesan')
        @yield('konten')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

<body class="bg-light">
    <main class="container"></main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
