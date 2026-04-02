<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parágrafo 42 · Dashboard do Autor</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      padding-top: 90px;
      font-family: 'Cormorant Garamond', 'Georgia', serif;
      background-image: url('chat.png');
      background-size: cover;
      background-attachment: fixed;
      color: #1e2b2c;
      line-height: 1.5;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      font-size: 1.05rem;
    }

    /* NAVBAR */
    .navbar {
      background: #1f3133;
      background: linear-gradient(105deg, #1a2e30 0%, #1d3537 100%);
      padding: 0.8rem 2rem;
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
      font-size: 2rem;
      letter-spacing: -0.02em;
      color: white;
    }
    .logo-text span {
      color: #e6c9a8;
      font-weight: 300;
      font-size: 1.6rem;
      margin-left: 5px;
    }

    .nav-links {
      display: flex;
      gap: 1.2rem;
      align-items: center;
      flex-wrap: wrap;
    }

    .nav-item {
      color: #ece1d3;
      text-decoration: none;
      font-weight: 500;
      padding: 0.5rem 1.2rem;
      border-radius: 40px;
      transition: 0.2s;
      font-size: 1.05rem;
      display: flex;
      align-items: center;
      gap: 6px;
      border: 1px solid transparent;
      font-family: 'Cormorant Garamond', 'Georgia', serif;
    }

    .nav-item i {
      color: #b78c5a;
      font-size: 1rem;
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

    /* DASHBOARD */
    .dashboard-container {
      max-width: 100%;
      margin: 1.5rem auto;
      padding: 0 1rem;
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    @media (min-width: 1400px) {
      .dashboard-container {
        padding: 0 0.5rem;
      }
    }

    .dashboard-header {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      gap: 1rem;
      margin-bottom: 2rem;
      padding: 0 0.5rem;
      width: 100%;
    }

    .welcome-box {
      text-align: center;
    }

    .welcome-box h1 {
      font-size: 2.4rem;
      color: #ffffff;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
      font-family: 'Cormorant Garamond', 'Georgia', serif;
      font-weight: 600;
    }

    .welcome-box h1 i {
      color: #b78c5a;
      font-size: 2.2rem;
    }

    .author-description {
      color: #e5d8ca;
      margin-top: 0.5rem;
      margin-bottom: 0;
      font-size: 1.05rem;
      font-family: 'Cormorant Garamond', 'Georgia', serif;
    }

    .author-description i {
      color: #b78c5a;
      margin-right: 0.3rem;
    }

    /* Cards de estatísticas - CENTRALIZADOS */
    .stats-grid {
      display: flex;
      justify-content: center;
      gap: 1.5rem;
      margin-bottom: 2rem;
      padding: 0 0.5rem;
      flex-wrap: wrap;
    }

    .stat-card {
      background: white;
      border-radius: 1.2rem;
      padding: 1.8rem;
      border: 1px solid #e5d8ca;
      box-shadow: 0 8px 20px -8px rgba(0,0,0,0.1);
      transition: 0.3s;
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 460px;
      min-width: 280px;
    }

    .stat-card:hover {
      transform: translateY(-5px);
      border-color: #b78c5a;
    }

    .stat-info h3 {
      font-size: 1rem;
      color: #6d7b7d;
      text-transform: uppercase;
      letter-spacing: 1.5px;
      margin-bottom: 0.6rem;
      font-family: 'Cormorant Garamond', 'Georgia', serif;
      font-weight: 500;
    }

    .stat-number {
      font-size: 2.8rem;
      font-weight: 700;
      color: #1f3133;
      font-family: 'Cormorant Garamond', 'Georgia', serif;
    }

    .stat-icon {
      width: 70px;
      height: 70px;
      background: #f0e8de;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #b78c5a;
      font-size: 2.2rem;
    }

    /* LINHA SEPARADORA MAIS BONITA */
    .separator {
      margin: 0 0.5rem 2rem 0.5rem;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      max-width: 800px;
    }

    .separator-line {
      flex: 1;
      height: 3px;
      background: linear-gradient(90deg, 
        transparent, 
        rgba(183, 140, 90, 0.4) 10%,
        #b78c5a 50%,
        rgba(183, 140, 90, 0.4) 90%,
        transparent);
      border-radius: 3px;
    }

    .separator-icon {
      width: 55px;
      height: 55px;
      background: linear-gradient(135deg, #b78c5a, #e6c9a8);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 1.2rem;
      box-shadow: 0 0 0 4px rgba(183, 140, 90, 0.2), 0 4px 12px rgba(0,0,0,0.1);
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      cursor: pointer;
    }

    .separator-icon i {
      color: #1f3133;
      font-size: 1.5rem;
      transition: transform 0.4s ease;
    }

    .separator-icon:hover {
      transform: scale(1.1);
      box-shadow: 0 0 0 6px rgba(183, 140, 90, 0.3), 0 6px 16px rgba(0,0,0,0.15);
    }

    .separator-icon:hover i {
      transform: rotate(360deg);
    }

    /* Efeito de brilho na linha */
    .separator-line {
      position: relative;
      overflow: hidden;
    }

    .separator-line::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.6), transparent);
      animation: shimmer 3s infinite;
    }

    @keyframes shimmer {
      0% {
        left: -100%;
      }
      100% {
        left: 100%;
      }
    }

    /* Grid principal - CARD MANTIDO NO MESMO TAMANHO */
    .dashboard-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 1.5rem;
      margin-bottom: 2rem;
      padding: 0 0.5rem;
      width: 100%;
      display: flex;
      justify-content: center;
    }

    .dashboard-card {
      background: white;
      border-radius: 1.2rem;
      padding: 1.8rem;
      border: 1px solid #e5d8ca;
      box-shadow: 0 8px 20px -8px rgba(0,0,0,0.1);
      width: 100%;
      display: flex;
      flex-direction: column;
      max-width: 950px;
      margin: 0 auto;
    }

    .card-title {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 1.5rem;
      padding-bottom: 0.8rem;
      border-bottom: 2px solid #f0e8de;
    }

    .card-title i {
      color: #b78c5a;
      font-size: 1.4rem;
    }

    .card-title h3 {
      font-size: 1.3rem;
      color: #1f3133;
      font-family: 'Cormorant Garamond', 'Georgia', serif;
      font-weight: 600;
    }

    /* CONTAINER DO GRÁFICO - AUMENTADO */
    .chart-container {
      height: 500px;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }

    /* GRÁFICO AUMENTADO DENTRO DO CONTAINER */
    .chart-container canvas {
      max-width: 100%;
      max-height: 100%;
      width: 100% !important;
      height: 100% !important;
      margin: 0 auto;
      display: block;
    }

    /* FOOTER */
    .footer {
      background: #1f3133;
      color: #ddd2c2;
      text-align: center;
      padding: 2rem;
      border-top: 3px solid #b78c5a;
      margin-top: auto;
    }

    .footer-content {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1rem;
    }

    .footer-logo {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 1.3rem;
      font-weight: 600;
      font-family: 'Cormorant Garamond', 'Georgia', serif;
    }

    .footer-logo i {
      color: #b78c5a;
      font-size: 1.6rem;
    }

    .footer-text {
      font-size: 1rem;
      opacity: 0.9;
      font-family: 'Cormorant Garamond', 'Georgia', serif;
    }

    .footer-social {
      display: flex;
      gap: 1.5rem;
      margin-top: 0.5rem;
    }

    .footer-social a {
      color: #ddd2c2;
      text-decoration: none;
      font-size: 1.4rem;
      transition: all 0.3s ease;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 38px;
      height: 38px;
      border-radius: 50%;
      background: rgba(255,255,255,0.05);
    }

    .footer-social a:hover {
      color: #b78c5a;
      background: rgba(183, 140, 90, 0.2);
      transform: translateY(-3px);
    }

    .footer-copyright {
      font-size: 0.9rem;
      opacity: 0.7;
      margin-top: 0.5rem;
      font-family: 'Cormorant Garamond', 'Georgia', serif;
    }

    .footer-copyright i {
      color: #b78c5a;
      margin: 0 4px;
    }

    /* Responsividade - GRÁFICO RESPONSIVO */
    @media (max-width: 900px) {
      .stats-grid {
        gap: 1.2rem;
      }
      .stat-card {
        width: 280px;
        padding: 1.5rem;
      }
      .dashboard-card {
        max-width: 100%;
      }
      .chart-container {
        height: 450px;
      }
      .separator-icon {
        width: 45px;
        height: 45px;
        margin: 0 1rem;
      }
      .separator-icon i {
        font-size: 1.2rem;
      }
      .stat-number {
        font-size: 2.4rem;
      }
    }
    
    @media (max-width: 768px) {
      .dashboard-container {
        padding: 0 0.5rem;
      }
      .stat-card {
        width: 260px;
        padding: 1.5rem;
      }
      .dashboard-card {
        padding: 1.5rem;
      }
      .chart-container {
        height: 380px;
      }
      .separator-icon {
        width: 40px;
        height: 40px;
        margin: 0 0.8rem;
      }
      .welcome-box h1 {
        font-size: 2rem;
      }
      .card-title h3 {
        font-size: 1.2rem;
      }
      .separator {
        max-width: 90%;
      }
    }
    
    @media (max-width: 600px) {
      .navbar {
        flex-direction: column;
        gap: 0.8rem;
        padding: 1rem;
      }
      .separator {
        margin: 0 0.5rem 1.5rem 0.5rem;
      }
      .separator-icon {
        width: 35px;
        height: 35px;
        margin: 0 0.6rem;
      }
      .separator-icon i {
        font-size: 1rem;
      }
      .welcome-box h1 {
        font-size: 1.8rem;
      }
      .stat-number {
        font-size: 2rem;
      }
      .chart-container {
        height: 300px;
      }
      .stat-card {
        width: 100%;
        max-width: 320px;
      }
    }

    @media (min-width: 1600px) {
      .stats-grid {
        gap: 2rem;
      }
      .stat-card {
        width: 380px;
        padding: 2.2rem;
      }
      .dashboard-card {
        padding: 2rem;
        max-width: 1000px;
      }
      .stat-number {
        font-size: 3rem;
      }
      .chart-container {
        height: 580px;
      }
      .separator-icon {
        width: 65px;
        height: 65px;
      }
      .separator-icon i {
        font-size: 1.7rem;
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
            <a class="nav-link text-white" href="{{ url('/prevendas') }}">
              <i class="fas fa-heart me-2"></i>Favoritar
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-warning fw-bold" href="{{ url('/dashboard') }}">
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

  <div class="dashboard-container">
    <div class="dashboard-header">
      <div class="welcome-box">
        <h1 id="tituloUsuario">
          <i class="fas fa-user"></i> Painel do Usuário
        </h1>
      </div>
    </div>

    <!-- Cards com métricas - CENTRALIZADOS -->
    <div class="stats-grid">
      <div class="stat-card">
        <div class="stat-info">
          <h3>Obras Publicadas</h3>
          <div class="stat-number">0</div>
        </div>
        <div class="stat-icon"><i class="fas fa-book"></i></div>
      </div>
      <div class="stat-card">
        <div class="stat-info">
          <h3>Total de livros favoritados</h3>
          <div class="stat-number">0</div>
        </div>
        <div class="stat-icon"><i class="fas fa-heart"></i></div>
      </div>
    </div>

    <!-- LINHA SEPARADORA MAIS BONITA -->
    <div class="separator">
      <div class="separator-line"></div>
      <div class="separator-line"></div>
    </div>

    <!-- Gráfico centralizado - GRÁFICO AUMENTADO DENTRO DO CARD -->
    <div class="dashboard-grid">
      <div class="dashboard-card">
        <div class="card-title">
          <i class="fas fa-chart-line"></i>
          <h3>Desempenho de total de livros favoritados - 2026</h3>
        </div>
        <div class="chart-container">
          <canvas id="salesChart"></canvas>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer">
    <div class="footer-content">
      <div class="footer-logo">
        <i class="fas fa-feather-alt"></i>
        <span>Parágrafo 42</span>
      </div>
      <div class="footer-social">
        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
      </div>
    </div>
  </footer>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
function Dashboard(){
  let token = $.cookie('token');
  console.log(token)

fetch('/api/dashboard?token=' + token)
  .then(res => res.json())
  .then(data => {
    

    console.log(data);

    document.querySelectorAll('.stat-number')[0].innerText = data.total_livros;
    document.querySelectorAll('.stat-number')[1].innerText = data.favoritos;

    const ctx = document.getElementById('salesChart').getContext('2d');

    new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
    datasets: [{
      label: 'Favoritados',
      data: [
        12,
        6,
        2,
        ...data.grafico.slice(3)
      ],
      backgroundColor: 'rgba(183, 140, 90, 0.7)',
      borderColor: '#b78c5a',
      borderWidth: 2
    }]
  }
});

  })
  .catch(err => {
    console.error('Erro:', err);
  });
}


Dashboard();
</script>
</body>
</html>