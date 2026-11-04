<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Sekolah UTS</title>
    <!-- Bootstrap CSS -->
    <link href="https://jsdelivr.net" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100 bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">SchoolApp</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link text-white" href="{{ route('students.index') }}">Daftar Siswa</a>
            </div>
        </div>
    </nav>

    <!-- Content Utama -->
    <div class="container my-5 flex-grow-1">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <div class="container">
            <p class="mb-0">&copy; {{ date('Y') }} | UTS Laravel - Ana Rodiana · 2457401016</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://jsdelivr.net"></script>
</body>
</html>
