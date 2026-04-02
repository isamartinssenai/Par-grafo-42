<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parágrafo 42 · cadastro</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="salva_cadastro.js" ></script>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      padding-top: 80px;
      font-family: 'Cormorant Garamond', 'Georgia', serif;
      background-image: url('chat.png');
      background-size: cover;
      background-attachment: fixed;
      color: #1e2b2c;
      line-height: 1.5;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* NAVBAR (igual ao original) */
    .navbar {
      background: #1f3133;
      background: linear-gradient(105deg, #1a2e30 0%, #1d3537 100%);
      padding: 0.8rem 2.5rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      border-bottom: 3px solid #b78c5a;
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .logo-icon {
      background: #b78c5a;
      width: 44px;
      height: 44px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #1f3133;
      font-size: 1.8rem;
      box-shadow: 0 3px 8px rgba(0,0,0,0.2);
    }

    .logo-text {
      font-weight: 600;
      font-size: 1.9rem;
      letter-spacing: -0.02em;
      color: white;
    }
    .logo-text span {
      color: #e6c9a8;
      font-weight: 300;
      font-size: 1.5rem;
      margin-left: 5px;
    }

    .nav-links {
      display: flex;
      gap: 1.2rem;
      align-items: center;
    }

    .nav-item {
      color: #ece1d3;
      text-decoration: none;
      font-weight: 500;
      padding: 0.5rem 1.2rem;
      border-radius: 40px;
      transition: 0.2s;
      font-size: 1rem;
      display: flex;
      align-items: center;
      gap: 6px;
      border: 1px solid transparent;
    }

    .nav-item i {
      color: #b78c5a;
      font-size: 0.95rem;
    }

    .nav-item:hover {
      background: #2f4547;
      border-color: #b78c5a80;
      color: #fffaf0;
    }

    .nav-item.active {
      background: #b78c5a;
      color: #1f3133;
      font-weight: 600;
    }
    .nav-item.active i {
      color: #1f3133;
    }

    /* CONTEÚDO PRINCIPAL - CADASTRO */
    .login-container {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 3rem 1.5rem;
    }

    .login-card {
      background: #fffffffa;
      backdrop-filter: blur(2px);
      border-radius: 3rem;
      box-shadow: 0 25px 40px -15px #1f3133, 0 10px 20px -8px rgba(0,0,0,0.2);
      max-width: 520px;
      width: 100%;
      padding: 2.8rem 2.5rem;
      border: 2px solid #b78c5a70;
      position: relative;
      overflow: hidden;
    }

    .login-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 8px;
      background: linear-gradient(90deg, #b78c5a, #e6c9a8, #b78c5a);
    }

    .login-header {
      text-align: center;
      margin-bottom: 2.5rem;
    }

    .login-header h1 {
      font-size: 2.2rem;
      font-weight: 600;
      color: #1f3133;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      margin-bottom: 0.5rem;
    }

    .login-header h1 i {
      color: #b78c5a;
      font-size: 2rem;
    }

    .login-header p {
      color: #5f7375;
      font-size: 1.1rem;
      background: #f0e8de;
      display: inline-block;
      padding: 0.4rem 1.8rem;
      border-radius: 40px;
      border: 1px solid #dacfbf;
    }

    .login-form {
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
    }

    .input-group {
      display: flex;
      flex-direction: column;
      gap: 0.5rem;
    }

    .input-group label {
      font-weight: 600;
      font-size: 0.9rem;
      text-transform: uppercase;
      letter-spacing: 0.02em;
      color: #3f4e4f;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .input-group label i {
      color: #b78c5a;
      width: 1.2rem;
      font-size: 1rem;
    }

    .input-wrapper {
      position: relative;
      display: flex;
      align-items: center;
    }

    .input-wrapper input, .input-wrapper select {
      width: 100%;
      background: #fcfaf7;
      border: 2px solid #e2dbd1;
      border-radius: 50px;
      padding: 1rem 1.5rem 1rem 3rem;
      font-size: 1rem;
      font-family: 'Inter', sans-serif;
      color: #1f2a2b;
      transition: 0.2s;
      outline: none;
    }

    .input-wrapper select {
      appearance: none;
      cursor: pointer;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23b78c5a' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 1.2rem center;
      background-size: 16px;
    }

    .input-wrapper input:focus, .input-wrapper select:focus {
      border-color: #b78c5a;
      box-shadow: 0 0 0 4px #b78c5a30;
      background: #ffffff;
    }

    .input-wrapper i.input-icon {
      position: absolute;
      left: 1.2rem;
      color: #b78c5a;
      font-size: 1.2rem;
      z-index: 1;
    }

    .toggle-password {
      position: absolute;
      right: 1.2rem;
      background: none;
      border: none;
      color: #8a9b9d;
      cursor: pointer;
      font-size: 1.1rem;
      transition: 0.2s;
    }

    .toggle-password:hover {
      color: #b78c5a;
    }

    .register-btn {
      background: #1f3133;
      border: none;
      color: white;
      font-weight: 600;
      font-size: 1.2rem;
      padding: 1rem;
      border-radius: 60px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
      cursor: pointer;
      transition: 0.3s;
      border: 2px solid #b78c5a;
      margin-top: 1rem;
      width: 100%;
    }

    .register-btn i {
      color: #e6c9a8;
      font-size: 1.2rem;
      transition: 0.3s;
    }

    .register-btn:hover {
      background: #2a4245;
      gap: 18px;
      transform: scale(1.02);
    }

    .register-btn:hover i {
      transform: translateX(5px);
      color: #ffffff;
    }

    .login-section {
      text-align: center;
      margin-top: 2rem;
      padding-top: 1.5rem;
      border-top: 2px dashed #d9cfc1;
    }

    .login-section p {
      color: #4f6567;
      margin-bottom: 0.8rem;
    }

    .login-link {
      background: transparent;
      border: 2px solid #b78c5a;
      color: #1f3133;
      font-weight: 600;
      padding: 0.8rem 2rem;
      border-radius: 50px;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 10px;
      transition: 0.3s;
    }

    .login-link:hover {
      background: #b78c5a;
      color: white;
      gap: 15px;
    }

    .login-link:hover i {
      color: white;
    }

    .book-decoration {
      display: flex;
      justify-content: center;
      gap: 1rem;
      margin-top: 2rem;
      color: #b78c5a80;
      font-size: 1.2rem;
    }

    .book-decoration i {
      background: #f0e8de;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1px solid #b78c5a;
    }

    .footer {
      background: #1f3133;
      color: #ddd2c2;
      text-align: center;
      padding: 1.5rem;
      border-top: 3px solid #b78c5a;
      margin-top: auto;
    }
    .footer i {
      color: #b78c5a;
      margin: 0 5px;
    }
    .footer a {
      color: #e6c9a8;
      text-decoration: none;
    }

    @media (max-width: 600px) {
      .navbar {
        flex-direction: column;
        gap: 0.8rem;
        padding: 1rem;
      }
      .login-card {
        padding: 2rem 1.5rem;
      }
    }
  </style>
</head>
<body>
<nav class="navbar fixed-top" style="background: linear-gradient(105deg, #1a2e30 0%, #1d3537 100%); border-bottom: 3px solid #b78c5a;">
  <div class="container-fluid">

    <!-- LOGO -->
    <a class="navbar-brand d-flex align-items-center gap-2 text-white" href="#">
      <div style="background:#b78c5a; width:40px; height:40px; border-radius:50%; display:flex; align-items:center; justify-content:center;">
        <i class="fas fa-book-open" style="color:#1f3133;"></i>
      </div>
      <span style="font-weight:600;">Parágrafo <span style="color:#e6c9a8;">42</span></span>
    </a>

    <!-- BOTÃO -->
    <button class="navbar-toggler text-white border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuLateral">
      <i class="fas fa-bars"></i>
    </button>

    <!-- MENU LATERAL -->
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="menuLateral">
      
      <div class="offcanvas-header" style="border-bottom: 2px solid #b78c5a;">
        <h5 class="offcanvas-title">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
      </div>

      <div class="offcanvas-body">

        <ul class="navbar-nav gap-2">

          <li class="nav-item">
            <a class="nav-link text-white" href="{{ url('/home') }}">
              <i class="fas fa-home me-2"></i>Início
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="{{ url('/estante') }}">
              <i class="fas fa-layer-group me-2"></i>Estante
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="{{ url('/inicio') }}">
              <i class="fas fa-book-medical me-2"></i>Cadastre seu livro
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="{{ url('/autor') }}">
              <i class="fas fa-feather me-2"></i>Cadastrar Autor
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-warning fw-bold" href="{{ url('/prevendas') }}">
              <i class="fas fa-heart me-2"></i>Favoritar
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="{{ url('/dashboard') }}">
              <i class="fas fa-chart-line me-2"></i>Dashboard
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="{{ url('/login') }}">
              <i class="fas fa-clipboard-list me-2"></i>Login
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="{{ url('/perfil') }}">
              <i class="fas fa-user-circle me-2"></i>Perfil
            </a>
          </li>

        </ul>

      </div>
    </div>

  </div>
</nav>

  <!-- CONTEÚDO PRINCIPAL - CADASTRO -->
  <div class="login-container">
    <div class="login-card">
      <div class="login-header">
        <h1>
          <i class="fas fa-feather"></i>
          Criar conta
        </h1>
        <p>Preencha seus dados</p>
      </div>

      <form class="login-form" onsubmit="event.preventDefault(); alert('✅ Cadastro realizado com sucesso! (demo)');">
        <!-- Nome completo -->
        <div class="input-group">
          <label><i class="fas fa-user"></i> Nome completo</label>
          <div class="input-wrapper">
            <i class="fas fa-user input-icon"></i>
            <input id="nome" name="nome" type="text" placeholder="Seu nome completo" required>
          </div>
        </div>

        <!-- E-mail -->
        <div class="input-group">
          <label><i class="fas fa-envelope"></i> E-mail</label>
          <div class="input-wrapper">
            <i class="fas fa-envelope input-icon"></i>
            <input id="email" name="email" type="email" placeholder="seu@email.com" required>
          </div>
        </div>

        <!-- Senha -->
        <div class="input-group">
          <label><i class="fas fa-lock"></i> Senha</label>
          <div class="input-wrapper">
            <i class="fas fa-key input-icon"></i>
            <input id="senha" name="senha" type="password"placeholder="Crie uma senha" required>
            <button type="button" class="toggle-password" onclick="togglePassword()">
              <i class="fas fa-eye" id="toggleIcon"></i>
            </button>
          </div>
        </div>

        <!-- Telefone -->
        <div class="input-group">
          <label><i class="fas fa-phone"></i> Telefone</label>
          <div class="input-wrapper">
            <i class="fas fa-phone input-icon"></i>
            <input id="telefone" name="telefone" type="tel" placeholder="(11) 99999-9999" required>
          </div>
        </div>

        <!-- Data de nascimento -->
        <div class="input-group">
          <label><i class="fas fa-calendar-alt"></i> Data de nascimento</label>
          <div class="input-wrapper">
            <i class="fas fa-calendar-alt input-icon"></i>
            <input id="nascimento" name="nascimento" type="date">
          </div>
        </div>

        <!-- Gênero -->
        <div class="input-group">
          <label><i class="fas fa-venus-mars"></i> Gênero</label>
          <div class="input-wrapper">
            <i class="fas fa-venus-mars input-icon"></i>
            <select id="genero" name="genero" required>
              <option value="" disabled selected>Selecione</option>
              <option value="feminino">Feminino</option>
              <option value="masculino">Masculino</option>
              <option value="nao-binario">Não-binário</option>
              <option value="outro">Outro</option>
              <option value="prefiro-nao-dizer">Prefiro não dizer</option>
            </select>
          </div>
        </div>

        <button type="submit" class="register-btn" id="meuid">
          <i class="fas fa-user-plus"></i> Criar conta
        </button>

        <div class="login-section">
          <p>Já possui uma conta?</p>
          <a href="{{ url('/login') }}" class="login-link" >
            <i class="fas fa-sign-in-alt"></i> Fazer login
          </a>
        </div>

        <div class="book-decoration">
          <i class="fas fa-book"></i>
          <i class="fas fa-book-open"></i>
          <i class="fas fa-book"></i>
        </div>
      </form>
    </div>
  </div>

  <footer class="footer">
    <i class="fas fa-store-alt"></i> Parágrafo 42 · 
    <i class="fas fa-book"></i> #42 · 
    <span>Leitores bem-vindos</span>
    <div style="margin-top: 0.5rem; font-size: 0.9rem;">
      <a href="#"><i class="fab fa-instagram"></i></a> · 
      <a href="#"><i class="fab fa-facebook"></i></a> · 
      <a href="#"><i class="fas fa-envelope"></i></a>
    </div>
  </footer>

  <script>
    function togglePassword() {
      const passwordInput = document.getElementById('password');
      const toggleIcon = document.getElementById('toggleIcon');
      
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
      } else {
        passwordInput.type = 'password';
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
      }
    }
  </script>
</body>
</html>