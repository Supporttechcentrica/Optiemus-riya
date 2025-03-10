<!-- resources/views/layouts/admin.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <!-- Admin Sidebar (Optional) -->
    <aside>
        <nav>
            <ul>
                <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('admin.about') }}">About</a></li>
                <li><a href="{{ route('admin.contact') }}">Contact</a></li>
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="main-content">
        @yield('content')
    </div>

    <!-- Admin Footer -->
    <footer>
        <p>&copy; 2025 Your Company - Admin Panel</p>
    </footer>

    <!-- Optional JS Scripts -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
