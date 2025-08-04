<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login | Dashboard Perpus</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  <style>
    body {
        background: url('{{ asset('assets/img/background/backgroundmt.jpeg') }}') no-repeat center center fixed;
        background-size: cover;
        font-family: 'Segoe UI', sans-serif;
        }

        .login-card {
        width: 100%;
        max-width: 420px;
        background-color: rgba(255, 255, 255, 0.95);
        border-radius: 16px;
        backdrop-filter: blur(8px);
        }

        .logo {
        width: 64px;
        height: 64px;
        border-radius: 50%;
        }

        #togglePassword {
        top: 50%;
        right: 12px;
        font-size: 1rem;
        cursor: pointer;
        }

  </style>
</head>
<body class="d-flex justify-content-center align-items-center min-vh-100">

  <div class="card login-card shadow-lg p-4">
    <div class="text-center mb-4">
      <img src="{{ asset('assets/img/logo/mt.png') }}" alt="Logo" class="logo mb-2" />
      <h4 class="fw-bold">Login Mardi Tani</h4>
      <p class="text-muted small">Silakan login untuk masuk ke dashboard</p>
    </div>

    {{ $slot }}
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const form = document.getElementById("loginForm");
    const loginBtn = document.getElementById("loginBtn");
    const btnText = document.getElementById("btnText");
    const btnLoader = document.getElementById("btnLoader");
    const passwordInput = document.getElementById("password");
    const togglePassword = document.getElementById("togglePassword");

    // form.addEventListener("submit", function (e) {
    // e.preventDefault();

    // // Animasi loading
    // btnText.classList.add("d-none");
    // btnLoader.classList.remove("d-none");
    // loginBtn.disabled = true;

    // // Simulasi loading proses login
    // setTimeout(() => {
    //     btnText.classList.remove("d-none");
    //     btnLoader.classList.add("d-none");
    //     loginBtn.disabled = false;

    //     alert("Login berhasil! (simulasi)");
    //     // window.location.href = "dashboard.html";
    // }, 2000);
    // });

    // Show/hide password
    togglePassword.addEventListener("click", function () {
    const isPassword = passwordInput.type === "password";
    passwordInput.type = isPassword ? "text" : "password";
    this.classList.toggle("fa-eye");
    this.classList.toggle("fa-eye-slash");
    });
  </script>
</body>
</html>
