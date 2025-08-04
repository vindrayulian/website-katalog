<div class="sidebar d-flex flex-column p-3" id="sidebar">
    <div class="text-center mb-4 position-relative">
        <img src="{{ asset('assets/img/logo/mt.png') }}" alt="Logo" class="logo mb-2" />
        <h5 class="fw-bold mb-0">Mardi Tani</h5>
        <button id="toggleClose" class="btn btn-sm btn-light position-absolute end-0 top-0 me-3 mt-2">
            <i class="fas fa-times"></i>
        </button>
    </div>

    <a href="#" class="menu-link active">
        <i class="fas fa-house me-2"></i> Dashboard
    </a>

    <div class="menu-section mt-4">
        <small class="text-muted text-uppercase">Menu & Halaman</small>

        <a class="menu-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#submenuBuku" role="button">
            <span><i class="fas fa-book me-2"></i> Produk</span>
            <i class="fas fa-chevron-down"></i>
        </a>
        <div class="collapse ps-4" id="submenuBuku">
            <a href="#" class="menu-link small"> Kategori Produk</a>
            <a href="#" class="menu-link small"> Tambah Produk</a>
            <a href="#" class="menu-link small"> Daftar Produk</a>
        </div>

        <a class="menu-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#submenuArtikel" role="button">
            <span><i class="fas fa-newspaper me-2"></i> Artikel</span>
            <i class="fas fa-chevron-down"></i>
        </a>
        <div class="collapse ps-4" id="submenuArtikel">
            <a href="#" class="menu-link small"> Kategori Artikel</a>
            <a href="#" class="menu-link small"> Daftar Artikel</a>
            <a href="#" class="menu-link small"> Tambah Artikel</a>
            <a href="#" class="menu-link small"> Komen</a>
        </div>
    </div>

    <div class="menu-section mt-4">
        <small class="text-muted text-uppercase">Akun</small>
        <a href="#" class="menu-link">
            <i class="fas fa-user-circle me-2"></i> Data Akun
        </a>
    </div>

    <div class="mt-auto">
        <form class="row p-2" action="{{ route('logout') }}" method="post">
            @csrf
            <button class="btn btn-danger" type="submit">
                <i class="fas fa-sign-out-alt me-2"></i>
                Keluar
            </button>
        </form>
    </div>
</div>
