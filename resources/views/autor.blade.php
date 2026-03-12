<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parágrafo 42 · cadastrar autor</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
  <script src="salva_autor.js" ></script>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html, body {
      height: 100%;
    }

    body {
      font-family: 'Cormorant Garamond', 'Georgia', serif;
      background-image: url('naice.png');
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
    .cadastro-container {
      flex: 1 0 auto;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem 1.5rem;
      width: 100%;
    }

    .cadastro-card {
      background: #fffffffa;
      backdrop-filter: blur(2px);
      border-radius: 3rem;
      box-shadow: 0 25px 40px -15px #1f3133, 0 10px 20px -8px rgba(0,0,0,0.2);
      max-width: 800px;
      width: 100%;
      padding: 2.5rem;
      border: 2px solid #b78c5a70;
      position: relative;
      overflow: hidden;
    }

    .cadastro-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 8px;
      background: linear-gradient(90deg, #b78c5a, #e6c9a8, #b78c5a);
    }

    /* HEADER DO CADASTRO */
    .cadastro-header {
      display: flex;
      align-items: center;
      gap: 2rem;
      margin-bottom: 2.5rem;
      flex-wrap: wrap;
    }

    .cadastro-avatar {
      position: relative;
      width: 100px;
      height: 100px;
    }

    .avatar-circle {
      width: 100px;
      height: 100px;
      background: linear-gradient(145deg, #dacfbf, #b78c5a);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 4px solid #b78c5a;
      box-shadow: 0 10px 20px -5px #1f3133;
    }

    .avatar-circle i {
      font-size: 3rem;
      color: #1f3133;
    }

    .cadastro-titulo h1 {
      font-size: 2.2rem;
      font-weight: 600;
      color: #1f3133;
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 0.3rem;
    }

    .cadastro-titulo h1 i {
      color: #b78c5a;
    }

    .cadastro-titulo p {
      color: #5f7375;
      font-size: 1rem;
      background: #f0e8de;
      display: inline-block;
      padding: 0.3rem 1.5rem;
      border-radius: 40px;
      border: 1px solid #dacfbf;
    }

    /* FORMULÁRIO */
    .form-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 1.5rem;
      margin-bottom: 2rem;
    }

    .form-group {
      display: flex;
      flex-direction: column;
      gap: 0.3rem;
    }

    .form-group.full-width {
      grid-column: span 2;
    }

    .form-label {
      font-size: 0.8rem;
      text-transform: uppercase;
      color: #6d7b7d;
      letter-spacing: 0.5px;
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .form-label i {
      color: #b78c5a;
      width: 1rem;
    }

    .form-control {
      font-size: 1.1rem;
      font-weight: 500;
      color: #1f3133;
      background: #f0e8de;
      padding: 0.8rem 1.2rem;
      border-radius: 50px;
      border: 2px solid #dacfbf;
      width: 100%;
      font-family: 'Cormorant Garamond', serif;
      transition: 0.2s;
    }

    .form-control:focus {
      outline: 2px solid #b78c5a;
      outline-offset: 2px;
      border-color: #b78c5a;
    }

    select.form-control {
      appearance: none;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23b78c5a' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 1rem center;
      background-size: 1rem;
    }

    /* BOTÕES */
    .acoes-form {
      display: flex;
      gap: 1rem;
      justify-content: flex-end;
      margin-top: 2rem;
      flex-wrap: wrap;
    }

    .btn {
      border: none;
      font-weight: 600;
      padding: 0.9rem 2rem;
      border-radius: 50px;
      font-size: 1rem;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      cursor: pointer;
      transition: 0.3s;
      border: 2px solid transparent;
      text-decoration: none;
      font-family: 'Cormorant Garamond', serif;
    }

    .btn-primary {
      background: #1f3133;
      color: white;
      border-color: #b78c5a;
    }

    .btn-primary i {
      color: #e6c9a8;
    }

    .btn-primary:hover {
      background: #2a4245;
      transform: scale(1.02);
      gap: 15px;
    }

    .btn-outline {
      background: transparent;
      border: 2px solid #b78c5a;
      color: #1f3133;
    }

    .btn-outline:hover {
      background: #b78c5a20;
      transform: scale(1.02);
    }

    .footer {
      background: #1f3133;
      color: #ddd2c2;
      text-align: center;
      padding: 1.5rem;
      border-top: 3px solid #b78c5a;
      flex-shrink: 0;
      width: 100%;
    }
    .footer i {
      color: #b78c5a;
      margin: 0 5px;
    }
    .footer a {
      color: #e6c9a8;
      text-decoration: none;
    }

    @media (max-width: 768px) {
      .cadastro-header {
        flex-direction: column;
        text-align: center;
      }
      .form-grid {
        grid-template-columns: 1fr;
      }
      .form-group.full-width {
        grid-column: span 1;
      }
      .acoes-form {
        justify-content: center;
      }
    }
  </style>
</head>
<body>
  <nav class="navbar">
    <div class="logo">
      <div class="logo-icon"><i class="fas fa-book-open"></i></div>
    </div>
    <div class="nav-links">
      <a href="{{ url('/home') }}" class="nav-item"><i class="fas fa-home"></i>Início</a>
      <a href="{{ url('/estante') }}" class="nav-item"><i class="fas fa-layer-group"></i>Estante</a>
      <a href="{{ url('/inicio') }}" class="nav-item"><i class="fas fa-book-medical"></i>Cadastre seu livro</a>
      <a href="{{ url('/login') }}" class="nav-item"><i class="fas fa-clipboard-list"></i>Login</a>
      <a href="{{ url('/cadastro') }}" class="nav-item"><i class="fas fa-user-plus"></i>Cadastro</a>
      <a href="{{ url('/perfil') }}" class="nav-item active"><i class="	fas fa-user-circle"></i>Perfil</a>
    </div>
  </nav>

  <!-- CONTEÚDO PRINCIPAL - CADASTRO DE AUTOR -->
  <div class="cadastro-container" name="csrf-token" content="{{ csrf_token() }}">
    <div class="cadastro-card">
      
      <!-- CABEÇALHO -->
      <div class="cadastro-header">
        <div class="cadastro-avatar">
          <div class="avatar-circle">
            <i class="fas fa-feather-alt"></i>
          </div>
        </div>
        <div class="cadastro-titulo" id="#meuid">
          <h1>
            <i class="fas fa-id-card"></i>
            Cadastrar Autor
          </h1>
          <p>Preencha os dados do autor</p>
        </div>
      </div>

      <!-- FORMULÁRIO AGORA COMO DIV -->
      <div id="form-autor" onsubmit="return salvarAutor(event)">
        <div class="form-grid">
          <!-- Nome Completo -->
          <div class="form-group full-width">
            <span class="form-label"><i class="fas fa-user"></i> Nome completo *</span>
            <input id="nome" name="nome" type="text" class="form-control" placeholder="Digite o nome completo" required>
          </div>

          <!-- Telefone -->
          <div class="form-group">
            <span class="form-label"><i class="fas fa-phone"></i> Telefone *</span>
            <input id="telefone" name="telefone"  type="text" class="form-control" placeholder="(00) 00000-0000" required>
          </div>

          <!-- CPF -->
          <div class="form-group">
            <span class="form-label"><i class="fas fa-id-card"></i> CPF *</span>
            <input id="cpf" name="cpf" type="text" class="form-control" placeholder="000.000.000-00" required>
          </div>

          <!-- Data de Nascimento -->
          <div class="form-group">
            <span class="form-label"><i class="fas fa-calendar-alt"></i> Data de nascimento *</span>
            <input id="nascimento" name="nascimento" type="date" class="form-control" required>
          </div>

          <!-- Gênero Literário -->
          <div class="form-group">
            <span class="form-label"><i class="fas fa-book"></i> Gênero literário *</span>
            <select id="genero" class="form-control"required>
              <option value="">Selecione...</option>
              <option value="romance">Romance</option>
              <option value="ficcao">Ficção Científica</option>
              <option value="fantasia">Fantasia</option>
              <option value="terror">Terror</option>
              <option value="suspense">Suspense</option>
              <option value="poesia">Poesia</option>
              <option value="biografia">Biografia</option>
              <option value="infantil">Infantil</option>
            </select>
          </div>
        </div>

        <!-- BOTÕES -->
        <div class="acoes-form">
          <button type="button" id="meuid" class="btn btn-primary">
            <i class="fas fa-save"></i> Cadastrar Autor
          </button>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer">
    <i class="fas fa-store-alt"></i> Parágrafo 42
    <div style="margin-top: 0.5rem; font-size: 0.9rem;">
      <a href="#"><i class="fab fa-instagram"></i></a> · 
      <a href="#"><i class="fab fa-facebook"></i></a> · 
      <a href="#"><i class="fas fa-envelope"></i></a>
    </div>
  </footer>

  <script>
    // Máscara para telefone
    document.getElementById('telefone').addEventListener('input', function(e) {
      let value = e.target.value.replace(/\D/g, '');
      if (value.length > 11) value = value.slice(0, 11);
      
      if (value.length > 10) {
        value = value.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
      } else if (value.length > 6) {
        value = value.replace(/(\d{2})(\d{4})(\d{0,4})/, '($1) $2-$3');
      } else if (value.length > 2) {
        value = value.replace(/(\d{2})(\d{0,5})/, '($1) $2');
      }
      e.target.value = value;
    });

    // Máscara para CPF
    document.getElementById('cpf').addEventListener('input', function(e) {
      let value = e.target.value.replace(/\D/g, '');
      if (value.length > 11) value = value.slice(0, 11);
      
      if (value.length > 9) {
        value = value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
      } else if (value.length > 6) {
        value = value.replace(/(\d{3})(\d{3})(\d{0,3})/, '$1.$2.$3');
      } else if (value.length > 3) {
        value = value.replace(/(\d{3})(\d{0,3})/, '$1.$2');
      }
      e.target.value = value;
    });

  </script>
</body>
</html>