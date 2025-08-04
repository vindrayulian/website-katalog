<x-auth.layout>
    <form id="loginForm" action="{{ route('authenticate') }}" method="POST">
        @csrf
      <div class="mb-3">
        <label for="username" class="form-label">Nama Pengguna</label>
        <input type="text" name="name" id="username" class="form-control" placeholder="super admin" required />
      </div>

      <div class="mb-4 position-relative">
        <label for="password" class="form-label">Kata Sandi</label>
        <input type="password" name="password" id="password" class="form-control pe-5" placeholder="••••••" required />
        <i id="togglePassword" class="fas fa-eye position-absolute end-0 translate-middle-y me-3 text-muted" style="cursor:pointer; top: 70%"></i>
      </div>

      <button type="submit" class="btn btn-primary w-100">
        <span id="btnText"><i class="fas fa-sign-in-alt me-2"></i>Login</span>
        <span id="btnLoader" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
      </button>
    </form>
</x-auth.layout>
