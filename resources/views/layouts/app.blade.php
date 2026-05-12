<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Bengkel Premium | Cory Debora</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --emerald-600: #059669;
            --emerald-700: #047857;
            --slate-900: #0f172a;
            --glass: rgba(255, 255, 255, 0.8);
        }

        body { 
            background-color: #f8fafc; 
            font-family: 'Inter', sans-serif;
            color: var(--slate-900);
        }

        /* Navbar dengan efek Glassmorphism */
        .navbar {
            background: var(--glass) !important;
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0,0,0,0.05);
            padding: 1.2rem 0;
        }

        .navbar-brand {
            font-weight: 800;
            color: var(--emerald-600) !important;
            letter-spacing: -0.5px;
            font-size: 1.5rem;
        }

        .nav-link {
            font-weight: 600;
            color: #64748b !important;
            transition: 0.3s;
        }

        .nav-link:hover {
            color: var(--emerald-600) !important;
        }

        /* Card Styling */
        .card-main {
            border: none;
            border-radius: 20px;
            box-shadow: 0 20px 25px -5px rgba(0,0,0,0.05);
            background: white;
            padding: 2rem;
        }

        /* Custom Button */
        .btn-main {
            background: var(--emerald-600);
            color: white;
            border-radius: 12px;
            padding: 12px 24px;
            font-weight: 600;
            border: none;
            box-shadow: 0 10px 15px -3px rgba(16, 185, 129, 0.2);
            transition: 0.3s;
        }

        .btn-main:hover {
            background: var(--emerald-700);
            transform: translateY(-2px);
            color: white;
        }

        /* Animasi halu */
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('kendaraan.index') }}">
                <i class="fa-solid fa-bolt-lightning me-2"></i>E-BENGKEL
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kendaraan.index') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kendaraan.create') }}">Unit Baru</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-5 fade-in">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>