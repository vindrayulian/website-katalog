<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard Mardi Tani</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('assets/css/dashboard/main.css') }}" />
</head>
<body>
  <!-- Navbar -->
    <x-dashboard.navbar></x-dashboard.navbar>

  <!-- Sidebar -->
    <x-dashboard.sidebar></x-dashboard.sidebar>

    <!-- Main Content -->
    <div class="main-content p-4" id="mainContent">
        <div class="row">
            {{ $slot }}
        </div>

        <x-dashboard.footer></x-dashboard.footer>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets/js/dashboard/script.js') }}"></script>
</body>
</html>
