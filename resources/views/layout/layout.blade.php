<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELCOME</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-main-bg overflow-hidden">
    <!-- Navbar with toggle button -->
    @include('components.navbar')

    <!-- Main Container -->
    <div class="flex h-screen">
        <!-- Sidebar -->
        @include('components.sidebar')

        <!-- Main Content -->
        <div id="mainContent" class="flex-1 p-4 overflow-y-auto ml-0 transition-all duration-300 ease-in-out">
            @yield('layout')
        </div>
    </div>

    <!-- JavaScript for Sidebar Toggle -->
    <script>
        document.getElementById('toggleSidebar').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('mainContent');
            const openIcon = document.getElementById('openIcon');
    
            // Toggle sidebar width and main content margin
            sidebar.classList.toggle('w-0');
            sidebar.classList.toggle('w-64');
            mainContent.classList.toggle('ml-0');
    
            // Rotate the open icon
            openIcon.classList.toggle('rotate-180');
    
            // Toggle the active class on the button
            this.classList.toggle('active');
        });
    </script>
</body>

</html>
