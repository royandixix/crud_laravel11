<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud</title>
    <!-- Local Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootsrap/assets/dist/css/bootstrap.min.css') }}">
    <!-- CDN Bootstrap CSS as a fallback -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Latihan Crud</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('siswa.tampil') }}">Kelola Siswa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center">Selamat Datang di Aplikasi CRUD</h1>
        <div class="text-center mt-4">
            <a href="{{ route('siswa.tampil') }}" class="btn btn-primary btn-lg">Kelola Siswa</a>
        </div>

        <!-- Cards Section -->
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Manajemen Siswa</h5>
                        <p class="card-text">Kelola data siswa dengan mudah dan cepat.</p>
                        <a href="{{ route('siswa.tampil') }}" class="btn btn-primary">Lihat Siswa</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Tambah Siswa</h5>
                        <p class="card-text">Tambah siswa baru ke dalam sistem.</p>
                        <a href="{{ route('siswa.tambah') }}" class="btn btn-primary">Tambah Siswa</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Statistik Siswa</h5>
                        <p class="card-text">Lihat statistik dan laporan siswa.</p>
                        <a href="#" class="btn btn-primary">Lihat Statistik</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CDN Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
