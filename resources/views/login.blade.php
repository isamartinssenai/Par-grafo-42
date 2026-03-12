<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parágrafo 42 · login</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
  <script src="../login.js" ></script>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
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

    /* CONTEÚDO PRINCIPAL - LOGIN */
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
      max-width: 480px;
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
      gap: 1.8rem;
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

    .input-wrapper input {
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

    .input-wrapper input:focus {
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

    .login-options {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 1rem;
      margin: 0.5rem 0;
    }

    .remember-me {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      cursor: pointer;
    }

    .remember-me input[type="checkbox"] {
      width: 18px;
      height: 18px;
      accent-color: #b78c5a;
      cursor: pointer;
    }

    .remember-me span {
      color: #4d6365;
      font-weight: 500;
    }

    .forgot-password {
      color: #b78c5a;
      text-decoration: none;
      font-weight: 600;
      transition: 0.2s;
      border-bottom: 1px dashed transparent;
    }

    .forgot-password:hover {
      color: #1f3133;
      border-bottom-color: #1f3133;
    }

    .login-btn {
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

    .login-btn i {
      color: #e6c9a8;
      font-size: 1.2rem;
      transition: 0.3s;
    }

    .login-btn:hover {
      background: #2a4245;
      gap: 18px;
      transform: scale(1.02);
    }

    .login-btn:hover i {
      transform: translateX(5px);
      color: #ffffff;
    }

    .register-section {
      text-align: center;
      margin-top: 2rem;
      padding-top: 1.5rem;
      border-top: 2px dashed #d9cfc1;
    }

    .register-section p {
      color: #4f6567;
      margin-bottom: 0.8rem;
    }

    .register-link {
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

    .register-link:hover {
      background: #b78c5a;
      color: white;
      gap: 15px;
    }

    .register-link:hover i {
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
      .login-options {
        flex-direction: column;
        align-items: flex-start;
      }
    }
  </style>
</head>
<body>
  <!-- NAVBAR IGUAL AO ORIGINAL -->
 <nav class="navbar">
    <div class="logo">
      <div class="logo-icon"><i class="fas fa-book-open"></i></div>
      <div class="logo-text"><span></span></div>
    </div>
    <div class="nav-links">
      
    </div>
  </nav><a href="{{ url('/home') }}" class="nav-item"><i class="fas fa-home"></i>Início</a>
      <a href="{{ url('/estante') }}" class="nav-item"><i class="fas fa-layer-group"></i>Estante</a>
      <a href="{{ url('/inicio') }}" class="nav-item"><i class="fas fa-book-medical"></i>Cadastre seu livro</a>
      <a href="{{ url('/login') }}" class="nav-item"><i class="fas fa-clipboard-list"></i>Login</a>
      <a href="{{ url('/cadastro') }}" class="nav-item"><i class="fas fa-user-plus"></i>Cadastro</a>
      <a href="{{ url('/perfil') }}" class="nav-item active"><i class="	fas fa-user-circle"></i>Perfil</a>


  <!-- CONTEÚDO PRINCIPAL - LOGIN -->
  <div class="login-container">
    <div class="login-card">
      <div class="login-header">
        <h1>
          <i class="fas fa-feather"></i>
          Bem-vindo
        </h1>
      
      </div>

     
        <div class="input-group">
          <label><i class="fas fa-envelope"></i> E-mail ou usuário</label>
          <div class="input-wrapper">
            <i class="fas fa-user input-icon"></i>
            <input id="email" name="email" type="text" placeholder="seu@email.com" value="" required>
          </div>
        </div>

        <!-- Campo de Senha -->
        <div class="input-group">
          <label><i class="fas fa-lock"></i> Senha</label>
          <div class="input-wrapper">
            <i class="fas fa-key input-icon"></i>
            <input  id="senha" name="senha" type="password" placeholder="••••••••" value="" required>
            <button type="button" class="toggle-password" onclick="togglePassword()">
              <i class="fas fa-eye" id="toggleIcon"></i>
            </button>
          </div>
        </div>

      

        <!-- Botão de Login -->
        <button type="button" class="login-btn" id="meuid">
          <i class="fas fa-sign-in-alt"></i> Entrar na estante
        </button>

        <!-- Seção de Cadastro -->
        <div class="register-section">
          <p>Ainda não tem uma estante?</p>
          <a href="{{ url('/cadastro') }}" class="register-link">
            <i class="fas fa-user-plus"></i> Criar conta gratuita
          </a>
        </div >
        

        <!-- Decoração com livrinhos -->
        <div class="book-decoration">
          <i class="fas fa-book"></i>
          <i class="fas fa-book-open"></i>
          <i class="fas fa-book"></i>
        </div>
      
    </div>
  </div>

  <!-- FOOTER -->
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

  <!-- Script para mostrar/ocultar senha -->
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