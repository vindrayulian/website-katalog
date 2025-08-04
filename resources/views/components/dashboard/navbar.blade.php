<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm px-4 position-sticky top-0 z-1">
    <button id="toggleOpen" class="btn btn-outline-secondary me-3 d-none">
        <i class="fas fa-bars"></i>
    </button>
    <span class="navbar-brand fw-semibold">Dashboard Mardi Tani</span>
    <div class="ms-auto">
        <span class="me-3">👋 Halo, {{ Auth::user()->name }}</span>
        <i class="fas fa-user-circle fa-lg"></i>
    </div>
</nav>
