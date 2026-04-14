<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parágrafo 42 · estante</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
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
      background-size:contain;
      color: #1e2b2c;
      line-height: 1.5;
      padding-top: 80px;
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

    /* ESTANTE DE LIVROS (adaptada) */
    .estante-section {
      max-width: 1200px;
      margin: 4rem auto;
      padding: 0 2rem;
    }

    .estante-titulo {
      text-align: center;
      margin-bottom: 2.5rem;
    }

    .estante-titulo h2 {
      font-size: 2.5rem;
      font-weight: 600;
      color: #1f3133;
      display: inline-block;
      background: #f0e8de;
      padding: 0.8rem 3rem;
      border-radius: 60px;
      border: 2px solid #b78c5a;
      box-shadow: 0 8px 0 #b78c5a;
    }

    .estante-titulo h2 i {
      color: #b78c5a;
      margin-right: 10px;
    }

    .estante-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
      gap: 2rem 1.5rem;
      margin-top: 2rem;
    }

    .livro-card {
      background: white;
      border-radius: 1.5rem 1.5rem 1rem 1rem;
      overflow: hidden;
      box-shadow: 0 15px 25px -10px rgba(0,0,0,0.2);
      transition: all 0.3s ease;
      border: 1px solid #e5d8ca;
      position: relative;
      cursor: pointer;
    }

    .livro-card:hover {
      transform: translateY(-10px) rotate(1deg);
      box-shadow: 0 25px 35px -12px #1f3133;
      border-color: #b78c5a;
    }

    .livro-capa {
      height: 220px;
      background: linear-gradient(145deg, #dacfbf, #b78c5a30);
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      border-bottom: 3px solid #b78c5a;
    }

    .livro-capa i {
      font-size: 5rem;
      color: #1f3133;
      opacity: 0.7;
      transition: 0.3s;
    }

    .livro-card:hover .livro-capa i {
      opacity: 1;
      transform: scale(1.1);
      color: #b78c5a;
    }

    .livro-info {
      padding: 1.2rem 1rem 1rem 1rem;
      text-align: center;
      background: #fdfaf7;
    }

    .livro-titulo {
      font-weight: 700;
      font-size: 1.1rem;
      color: #1f3133;
      margin-bottom: 0.4rem;
      line-height: 1.3;
    }

    .livro-autor {
      font-size: 0.9rem;
      color: #6d7b7d;
      font-style: italic;
      margin-bottom: 0.3rem;
    }

    .livro-ano {
      font-size: 0.8rem;
      background: #e7ddd1;
      display: inline-block;
      padding: 0.2rem 0.8rem;
      border-radius: 30px;
      color: #1f3133;
      font-weight: 600;
      margin-top: 0.3rem;
    }

    .ver-mais-btn {
      text-align: center;
      margin-top: 3rem;
    }

    .ver-mais-btn button {
      background: transparent;
      border: 2px solid #b78c5a;
      color: #1f3133;
      font-weight: 600;
      padding: 1rem 2.5rem;
      border-radius: 50px;
      font-size: 1.1rem;
      cursor: pointer;
      transition: 0.3s;
      display: inline-flex;
      align-items: center;
      gap: 10px;
    }

    .ver-mais-btn button:hover {
      background: #b78c5a;
      color: white;
      gap: 15px;
    }

    .ver-mais-btn button:hover i {
      transform: translateX(5px);
      color: white;
    }

    .footer {
      background: #1f3133;
      color: #ddd2c2;
      text-align: center;
      padding: 2rem;
      border-top: 3px solid #b78c5a;
      margin-top: 3rem;
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
      .estante-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
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
            <a class="nav-link text-white" href="{{ url('/ebook') }}">
              <i class="fas fa-book-medical me-2"></i>Cadastre seu e-book
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


  <main>
    <section class="estante-section">
      <div class="estante-titulo">
        <h2><i class="fas fa-layer-group"></i> Nossa Estante Virtual</h2>
      </div>

      <div class="estante-grid">
        <!-- Livro 1 -->
        <div class="livro-card">
          <div class="livro-capa">
           <img src="dom.jpg" style="height: 210px; width: auto;">
          </div>
          <div class="livro-info">
            <div class="livro-titulo">Dom Casmurro</div>
            <div class="livro-autor">Machado de Assis</div>
            <div class="livro-ano">1899</div>
          </div>
        </div>

        <!-- Livro 2 -->
        <div class="livro-card">
          <div class="livro-capa">
            <img src="O-pequeno-príncipe.jpg" style="height: 210px; width: auto;">
          </div>
          <div class="livro-info">
            <div class="livro-titulo">O Pequeno Príncipe</div>
            <div class="livro-autor">Saint-Exupéry</div>
            <div class="livro-ano">1943</div>
          </div>
        </div>

        <!-- Livro 3 -->
        <div class="livro-card">
          <div class="livro-capa">
      <img src="1984.jpg" style="height: 210px; width: auto;">
          </div>
          <div class="livro-info">
            <div class="livro-titulo">1984</div>
            <div class="livro-autor">George Orwell</div>
            <div class="livro-ano">1949</div>
          </div>
        </div>

        <!-- Livro 4 -->
        <div class="livro-card">
          <div class="livro-capa">
        <img src="memorias-postumas.webp" style="height: 210px; width: auto;">
          </div>
          <div class="livro-info">
            <div class="livro-titulo">Memórias Póstumas</div>
            <div class="livro-autor">Machado de Assis</div>
            <div class="livro-ano">1881</div>
          </div>
        </div>

        <!-- Livro 5 -->
        <div class="livro-card">
          <div class="livro-capa">
          <img src="A-Metamorfose-Franz-Kafka.webp" style="height: 210px; width: auto;">
          </div>
          <div class="livro-info">
            <div class="livro-titulo">A Metamorfose</div>
            <div class="livro-autor">Franz Kafka</div>
            <div class="livro-ano">1915</div>
          </div>
        </div>

        <!-- Livro 6 -->
        <div class="livro-card">
          <div class="livro-capa">
           <img src="cego.jpg" style="height: 210px; width: auto;">
          </div>
          <div class="livro-info">
            <div class="livro-titulo">Ensaio sobre a Cegueira</div>
            <div class="livro-autor">José Saramago</div>
            <div class="livro-ano">1995</div>
          </div>
        </div>

        <!-- Livro 7 -->
        <div class="livro-card">
          <div class="livro-capa">
          <img src="sol.jpg" style="height: 210px; width: auto;">
          </div>
          <div class="livro-info">
            <div class="livro-titulo">Cem Anos de Solidão</div>
            <div class="livro-autor">Gabriel García Márquez</div>
            <div class="livro-ano">1967</div>
          </div>
        </div>

        <!-- Livro 8 -->
        <div class="livro-card">
          <div class="livro-capa">
           <img src="images.jpg" style="height: 210px; width: auto;">
          </div>
          <div class="livro-info">
            <div class="livro-titulo">O Hobbit</div>
            <div class="livro-autor">J.R.R. Tolkien</div>
            <div class="livro-ano">1937</div>
          </div>
        </div>

        <!-- Livro 9 -->
        <div class="livro-card">
          <div class="livro-capa">
           <img src="org.jpg" style="height: 210px; width: auto;">
          </div>
          <div class="livro-info">
            <div class="livro-titulo">Orgulho e Preconceito</div>
            <div class="livro-autor">Jane Austen</div>
            <div class="livro-ano">1813</div>
          </div>
        </div>

<!-- Livro 10 -->
        <div class="livro-card">
          <div class="livro-capa">
            <img src="senhor-aneis-.webp" style="height: 210px; width: auto;">
          </div>
          <div class="livro-info">
            <div class="livro-titulo">O Senhor dos Anéis</div>
            <div class="livro-autor">J.R.R. Tolkien</div>
            <div class="livro-ano">1954</div>
          </div>
        </div>
      </div>

      <div class="ver-mais-btn">
        <button onclick="alert('Não temos mais livro, AINDA! :<')">
          <i class="fas fa-books"></i> Ver mais livros 
          <i class="fas fa-arrow-right"></i>
        </button>
      </div>
    </section>
  </main>

  <!-- FOOTER (igual, mas opcional - pode remover se quiser) -->
  <footer class="footer">
    <i class="fas fa-store-alt"></i> Parágrafo 42
    <i class="fas fa-book"></i> 
    <span></span>
    <div style="margin-top: 0.8rem; font-size: 0.9rem;">
      <a href="#"><i class="fab fa-instagram"></i></a> · 
      <a href="#"><i class="fab fa-facebook"></i></a> · 
      <a href="#"><i class="fas fa-envelope"></i></a>
    </div>
  </footer>
</body>
</html>
