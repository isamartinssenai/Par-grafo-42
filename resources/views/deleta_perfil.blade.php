<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parágrafo 42 · meu perfil</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
  <script src="../deleta_perfil.js"></script>
  
  <style>
    /* Seu CSS permanece o mesmo */
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

    /* CONTEÚDO PRINCIPAL - PERFIL */
    .perfil-container {
      flex: 1 0 auto;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem 1.5rem;
      width: 100%;
    }

    .perfil-card {
      background: #fffffffa;
      backdrop-filter: blur(2px);
      border-radius: 3rem;
      box-shadow: 0 25px 40px -15px #1f3133, 0 10px 20px -8px rgba(0,0,0,0.2);
      max-width: 1000px;
      width: 100%;
      padding: 2.5rem;
      border: 2px solid #b78c5a70;
      position: relative;
      overflow: hidden;
    }

    .perfil-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 8px;
      background: linear-gradient(90deg, #b78c5a, #e6c9a8, #b78c5a);
    }

    .perfil-header {
      display: flex;
      align-items: center;
      gap: 2rem;
      margin-bottom: 2.5rem;
      flex-wrap: wrap;
    }

    .perfil-avatar {
      position: relative;
      width: 120px;
      height: 120px;
    }

    .avatar-circle {
      width: 120px;
      height: 120px;
      background: linear-gradient(145deg, #dacfbf, #b78c5a);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 4px solid #b78c5a;
      box-shadow: 0 10px 20px -5px #1f3133;
    }

    .avatar-circle i {
      font-size: 4rem;
      color: #1f3133;
    }

    .editar-avatar {
      position: absolute;
      bottom: 5px;
      right: 5px;
      background: #b78c5a;
      width: 35px;
      height: 35px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 2px solid white;
      cursor: pointer;
      transition: 0.2s;
    }

    .editar-avatar i {
      color: white;
      font-size: 1rem;
    }

    .editar-avatar:hover {
      background: #1f3133;
      transform: scale(1.1);
    }

    .perfil-titulo h1 {
      font-size: 2.2rem;
      font-weight: 600;
      color: #1f3133;
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 0.3rem;
    }

    .perfil-titulo h1 i {
      color: #b78c5a;
    }

    .perfil-titulo p {
      color: #5f7375;
      font-size: 1rem;
      background: #f0e8de;
      display: inline-block;
      padding: 0.3rem 1.5rem;
      border-radius: 40px;
      border: 1px solid #dacfbf;
    }

    .perfil-stats {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 1rem;
      margin-bottom: 2.5rem;
    }

    .stat-card {
      background: #f0e8de;
      border-radius: 1.5rem;
      padding: 1.2rem;
      text-align: center;
      border: 1px solid #b78c5a70;
      transition: 0.2s;
    }

    .stat-card:hover {
      background: #e7ddd1;
      transform: translateY(-3px);
    }

    .stat-card i {
      font-size: 1.8rem;
      color: #b78c5a;
      margin-bottom: 0.5rem;
    }

    .stat-card .stat-value {
      font-size: 1.5rem;
      font-weight: 700;
      color: #1f3133;
    }

    .stat-card .stat-label {
      font-size: 0.85rem;
      color: #4f6567;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    .perfil-info {
      margin-bottom: 2rem;
    }

    .info-section {
      background: #fcfaf7;
      border-radius: 2rem;
      padding: 1.5rem;
      border: 1px solid #e2dbd1;
      margin-bottom: 1.5rem;
    }

    .section-title {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 1.5rem;
      font-size: 1.3rem;
      color: #1f3133;
      border-bottom: 2px solid #b78c5a30;
      padding-bottom: 0.8rem;
    }

    .section-title i {
      color: #b78c5a;
    }

    .info-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 1.5rem;
    }

    .info-item {
      display: flex;
      flex-direction: column;
      gap: 0.3rem;
    }

    .info-label {
      font-size: 0.8rem;
      text-transform: uppercase;
      color: #6d7b7d;
      letter-spacing: 0.5px;
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .info-label i {
      color: #b78c5a;
      width: 1rem;
    }

    .info-value {
      font-size: 1.1rem;
      font-weight: 500;
      color: #1f3133;
      background: #f0e8de;
      padding: 0.5rem 1rem;
      border-radius: 50px;
      border: 1px solid #dacfbf;
      width: 100%;
      box-sizing: border-box;
    }

    input.info-value {
      font-family: inherit;
    }

    input.info-value:focus {
      outline: 2px solid #b78c5a;
      outline-offset: 2px;
    }

    .preferencias-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 1rem;
    }

    .pref-item {
      display: flex;
      align-items: center;
      gap: 10px;
      background: #f0e8de;
      padding: 0.8rem 1.2rem;
      border-radius: 50px;
      border: 1px solid #dacfbf;
    }

    .pref-item i {
      color: #b78c5a;
    }

    .pref-item span {
      color: #1f3133;
      font-weight: 500;
    }

    .pref-item .badge {
      margin-left: auto;
      background: #b78c5a;
      color: white;
      padding: 0.2rem 0.8rem;
      border-radius: 30px;
      font-size: 0.8rem;
    }

    /* ===== NOVA SEÇÃO: LIVROS CADASTRADOS PELO USUÁRIO ===== */
    .meus-livros-section {
      margin-top: 1.5rem;
    }

    .livros-stats {
      display: flex;
      gap: 1rem;
      margin-bottom: 1.5rem;
      flex-wrap: wrap;
    }

    .livro-stat-card {
      background: #f0e8de;
      border-radius: 1rem;
      padding: 1rem 1.5rem;
      display: flex;
      align-items: center;
      gap: 1rem;
      flex: 1;
      min-width: 150px;
      border: 1px solid #b78c5a70;
    }

    .livro-stat-card i {
      font-size: 2rem;
      color: #b78c5a;
    }

    .livro-stat-info h4 {
      font-size: 1.5rem;
      font-weight: 700;
      color: #1f3133;
      line-height: 1.2;
    }

    .livro-stat-info p {
      color: #5f7375;
      font-size: 0.9rem;
    }

    .meus-livros-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
      gap: 1.5rem;
      margin: 1.5rem 0;
    }

    .meu-livro-card {
      background: #fcfaf7;
      border-radius: 1.5rem;
      overflow: hidden;
      box-shadow: 0 10px 20px -8px rgba(0,0,0,0.1);
      border: 1px solid #e5d8ca;
      transition: 0.3s;
      position: relative;
    }

    .meu-livro-card:hover {
      transform: translateY(-5px);
      border-color: #b78c5a;
      box-shadow: 0 15px 25px -10px #1f3133;
    }

    .livro-capa {
      height: 160px;
      background: linear-gradient(135deg, #dacfbf, #b78c5a40);
      display: flex;
      align-items: center;
      justify-content: center;
      border-bottom: 2px solid #b78c5a;
    }

    .livro-capa i {
      font-size: 4rem;
      color: #1f3133;
      opacity: 0.8;
    }

    .meu-livro-card:hover .livro-capa i {
      opacity: 1;
      color: #b78c5a;
      transform: scale(1.05);
    }

    .livro-info {
      padding: 1.2rem 1rem;
    }

    .livro-info h4 {
      font-size: 1.1rem;
      font-weight: 700;
      color: #1f3133;
      margin-bottom: 0.3rem;
    }

    .livro-info .autor {
      font-size: 0.9rem;
      color: #6d7b7d;
      font-style: italic;
      margin-bottom: 0.5rem;
    }

    .livro-meta {
      display: flex;
      gap: 0.5rem;
      font-size: 0.8rem;
      color: #8a9b9d;
      margin-bottom: 0.8rem;
    }

    .livro-meta span {
      background: #f0e8de;
      padding: 0.2rem 0.5rem;
      border-radius: 20px;
    }

    .livro-acoes {
      display: flex;
      gap: 0.5rem;
      justify-content: flex-end;
      border-top: 1px solid #e2dbd1;
      padding-top: 0.8rem;
      margin-top: 0.5rem;
    }

    .livro-acoes button {
      background: none;
      border: none;
      color: #8a9b9d;
      cursor: pointer;
      transition: 0.2s;
      font-size: 1rem;
      padding: 0.3rem;
    }

    .livro-acoes button:hover {
      color: #b78c5a;
      transform: scale(1.1);
    }

    .livro-acoes .delete:hover {
      color: #c1715b;
    }

    .ver-mais-btn {
      text-align: center;
      margin: 1rem 0;
    }

    .ver-mais-btn button {
      background: transparent;
      border: 2px solid #b78c5a;
      color: #1f3133;
      font-weight: 600;
      padding: 0.8rem 2rem;
      border-radius: 50px;
      cursor: pointer;
      transition: 0.3s;
      display: inline-flex;
      align-items: center;
      gap: 10px;
    }

    .ver-mais-btn button:hover {
      background: #b78c5a;
      color: white;
    }

    .acoes-perfil {
      display: flex;
      gap: 1rem;
      justify-content: flex-end;
      margin-top: 1.5rem;
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

    .btn-danger {
      background: #c1715b;
      color: white;
    }

    .btn-danger:hover {
      background: #b15e48;
      transform: scale(1.02);
    }

    .btn-success {
      background: #b78c5a;
      color: #1f3133;
      border-color: #1f3133;
    }

    .btn-success:hover {
      background: #a07949;
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
      .perfil-header {
        flex-direction: column;
        text-align: center;
      }
      .perfil-stats {
        grid-template-columns: repeat(2, 1fr);
      }
      .info-grid {
        grid-template-columns: 1fr;
      }
      .preferencias-grid {
        grid-template-columns: 1fr;
      }
      .meus-livros-grid {
        grid-template-columns: repeat(2, 1fr);
      }
      .livros-stats {
        flex-direction: column;
      }
      .acoes-perfil {
        justify-content: center;
      }
    }
  </style>
</head>
<body>
    <nav class="navbar">
    <div class="logo">
      <div class="logo-icon"><i class="fas fa-book-open"></i></div>
      <div class="logo-text">Parágrafo<span>42</span></div>
    </div>
    <div class="nav-links">
      <a href="{{ url('/home') }}" class="nav-item"><i class="fas fa-home"></i>Início</a>
      <a href="{{ url('/estante') }}" class="nav-item"><i class="fas fa-layer-group"></i>Estante</a>
      <a href="{{ url('/inicio') }}" class="nav-item"><i class="fas fa-book-medical"></i>Cadastre seu livro</a>
      <a href="{{ url('/autor') }}" class="nav-item active"><i class="fas fa-feather"></i>Cadastrar Autor</a>
      <a href="{{ url('/prevendas') }}" class="nav-item"><i class="fas fa-cart-shopping"></i>Pré vendas</a>
      <a href="{{ url('/login') }}" class="nav-item"><i class="fas fa-clipboard-list"></i>Login</a>
      <a href="{{ url('/perfil') }}" class="nav-item"><i class="fas fa-user-circle"></i>Perfil</a>
    </div>
  </nav>
  <!-- CONTEÚDO PRINCIPAL - PERFIL -->
  <div class="perfil-container">
    <div class="perfil-card">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <input type="hidden" id="id_cadastro" value="{{ $cadastro->id}}">
      
      <!-- CABEÇALHO DO PERFIL -->
      <div class="perfil-header">
        <div class="perfil-avatar">
          <div class="avatar-circle">
            <i class="fas fa-user-circle"></i>
          </div>
          <div class="editar-avatar">
            <i class="fas fa-camera"></i>
          </div>
        </div>
        <div class="perfil-titulo">
          <h1>
            <i class="fas fa-id-card"></i>
            Meu Perfil
          </h1>
        </div>
      </div>

      <!-- INFORMAÇÕES PESSOAIS -->
      <div class="perfil-info">
        <div class="info-section">
          <div class="section-title">
            <i class="fas fa-user"></i>
            <h3>Informações Pessoais</h3>
          </div>
          <div class="info-grid">
            <div class="info-item">
              <span class="info-label"><i class="fas fa-user"></i> Nome completo</span>
              <input type="text" id="nome" name="nome" class="info-value" value="{{ $cadastro->nome }}" placeholder="Seu nome completo" required>
            </div>
            <div class="info-item">
              <span class="info-label"><i class="fas fa-envelope"></i> E-mail</span>
              <input type="email" id="email" name="email" class="info-value" value="{{ $cadastro->email}}" placeholder="seu@email.com" required>
            </div>
            <div class="info-item">
              <span class="info-label"><i class="fas fa-calendar-alt"></i> Data de nascimento</span>
              <input type="text" id="nascimento" name="nascimento" class="info-value" value="{{ $cadastro->nascimento}}" placeholder="dd/mm/aaaa" required>
            </div>
            <div class="info-item">
              <span class="info-label"><i class="fas fa-phone"></i> Telefone</span>
              <input type="tel" id="telefone" name="telefone" class="info-value" value="{{ $cadastro->telefone}}" placeholder="(00) 00000-0000" required>
            </div>
            <div class="info-item">
              <span class="info-label"><i class="fas fa-venus-mars"></i> Gênero</span>
              <input type="text" id="genero" name="genero" class="info-value" value="{{ $cadastro->genero}}" placeholder="Gênero" required>
            </div>
            <div class="info-item">
              <span class="info-label"><i class="fas fa-eye"></i> Senha</span>
              <input type="password" id="senha" name="senha" class="info-value" value="********" placeholder="********" required>
            </div>
          </div>
        </div>
      </div>

      <!-- BOTÕES DE AÇÃO -->
      <div class="acoes-perfil">
        <button type="submit" id="meuid" form="form-editar-perfil" class="btn btn-outline">
          <i class="fas fa-pencil-alt"></i> Deletar perfil
        </button>
        <button type="button" class="btn btn-danger" onclick="confirmarSair()">
          <i class="fas fa-sign-out-alt"></i> Sair
        </button>
      </div>
    </div>
  </div>

  <footer class="footer">
    <i class="fas fa-store-alt"></i> Parágrafo 42 · 
    <i class="fas fa-book"></i> #42 · 
    <span>Meus livros cadastrados</span>
    <div style="margin-top: 0.5rem; font-size: 0.9rem;">
      <a href="#"><i class="fab fa-instagram"></i></a> · 
      <a href="#"><i class="fab fa-facebook"></i></a> · 
      <a href="#"><i class="fas fa-envelope"></i></a>
    </div>
  </footer>
</body>

<script>
function confirmarSair() {
  if (confirm('Deseja mesmo sair?')) {
    window.location.href = "{{ url('/home') }}";
  }
}
</script>
</html>
