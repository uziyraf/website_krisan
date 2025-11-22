<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Panel Admin')</title> <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="admin-layout">
        
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <h2>Admin Panel</h2>
                <button class="close-sidebar-btn" onclick="toggleSidebar()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            {{-- ... (Menu navigasi Anda tetap sama di sini) ... --}}
            <nav class="sidebar-menu">
                <a href="{{ route('home') }}" target="_blank" class="menu-item">
                    <i class="fas fa-home"></i> Lihat Website
                </a>
                <div class="menu-label">Manajemen Data</div>
                <a href="{{ route('farmers.index') }}" class="menu-item {{ request()->routeIs('farmers.*') ? 'active' : '' }}">
                    <i class="fas fa-users"></i> Data Petani
                </a>
                <a href="{{ route('flowers.index') }}" class="menu-item {{ request()->routeIs('flowers.*') ? 'active' : '' }}">
                    <i class="fas fa-leaf"></i> Data Bunga
                </a>
                <a href="{{ route('visitors.index') }}" class="menu-item {{ request()->routeIs('visitors.*') ? 'active' : '' }}">
                    <i class="fas fa-chart-line"></i> Data Pengunjung
                </a>
                
                <div class="menu-label">Akun</div>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="menu-item logout-btn">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </form>
            </nav>
        </aside>

        <div class="sidebar-overlay" onclick="toggleSidebar()"></div>

        <main class="main-content">
            <button class="open-sidebar-btn" onclick="toggleSidebar()">
                <i class="fas fa-bars"></i> Menu
            </button>

            @yield('content')
        </main>
    </div>

    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('active');
            document.querySelector('.sidebar-overlay').classList.toggle('active');
        }
    </script>
</body>
</html>