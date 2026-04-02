<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parágrafo 42 · home</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../home.js" ></script>
  
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
    }

   
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


    .hero {
      max-width: 1200px;
      margin: 0 auto;
      padding: 4rem 2rem 2rem 2rem;
      text-align: center;
    }

    .hero h1 {
      font-size: 3.2rem;
      font-weight: 600;
      color: #1f3133;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 15px;
      flex-wrap: wrap;
    }
    .hero h1 i {
      color: #b78c5a;
      font-size: 3rem;
    }
    .hero .hash {
      font-family: 'Georgia', serif;
      background: #e8ddcf;
      padding: 0.2rem 1.5rem;
      border-radius: 60px;
      font-size: 2rem;
      color: #4f3f2e;
      border: 1px solid #b78c5a60;
    }

    .hero-description {
      font-size: 1.3rem;
      color: #4f5f61;
      max-width: 700px;
      margin: 1.8rem auto 0 auto;
      background: #f0e8de;
      padding: 1rem 2.5rem;
      border-radius: 60px;
      border: 1px solid #dacfbf;
      box-shadow: 0 4px 10px rgba(0,0,0,0.02);
    }

  
    .features {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 2rem;
      max-width: 1100px;
      margin: 3.5rem auto 2rem auto;
      padding: 0 1.5rem;
    }

    .feature-card {
      background: white;
      padding: 2rem 1.8rem;
      border-radius: 2.5rem;
      box-shadow: 0 18px 30px -12px #1f2f3020, 0 4px 12px #e3d7cb;
      flex: 1 1 250px;
      max-width: 300px;
      border: 1px solid #f0e2d2;
      transition: 0.2s;
    }
    .feature-card:hover {
      transform: translateY(-6px);
      border-color: #b78c5a;
    }

    .feature-icon {
      background: #f2e4d6;
      width: 70px;
      height: 70px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1.5rem auto;
      color: #b78c5a;
      font-size: 2.2rem;
      border: 2px dashed #b78c5a80;
    }

    .feature-card h3 {
      font-size: 1.5rem;
      font-weight: 600;
      color: #1f3133;
      margin-bottom: 0.8rem;
    }

    .feature-card p {
      color: #536568;
      font-weight: 400;
    }

    .destaque-livraria {
      background: #e7ddd1;
      margin: 3rem 1.5rem 4rem 1.5rem;
      padding: 2.5rem;
      border-radius: 4rem;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      gap: 3rem;
      border: 2px solid #b78c5a70;
      max-width: 1000px;
      margin-left: auto;
      margin-right: auto;
    }

    .destaque-texto {
      max-width: 500px;
    }
    .destaque-texto h2 {
      font-size: 2.2rem;
      font-weight: 600;
      color: #1f3133;
    }
    .destaque-texto h2 i {
      color: #b78c5a;
      margin-right: 8px;
    }
    .destaque-texto p {
      font-size: 1.1rem;
      margin-top: 1rem;
      color: #3f5355;
    }
    .destaque-numero {
      font-size: 5rem;
      font-weight: 600;
      color: #b78c5a;
      background: #ffffffc0;
      padding: 0.5rem 2rem;
      border-radius: 80px;
      border: 3px solid #1f3133;
      box-shadow: 0 0 0 4px #b78c5a;
      font-family: 'Georgia', serif;
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
      .hero h1 {
        font-size: 2.4rem;
      }
      .destaque-livraria {
        flex-direction: column;
        text-align: center;
        padding: 1.8rem;
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
            <a class="nav-link text-warning fw-bold" href="{{ url('/home') }}">
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
    <section class="hero">
      <h1>
       
        <img src="celular (1).png" style="height: 200px; width: auto;">
      
      </h1>
      <div class="hero-description">
        <i class="fas fa-quote-left" style="color: #b78c5a;"></i> 
        Um refúgio para leitores e colecionadores de histórias 
        <i class="fas fa-quote-right" style="color: #b78c5a;"></i>
      </div>
    </section>

   
    <section class="features">
      <div class="feature-card">
        <div class="feature-icon"><i class="fas fa-couch"></i></div>
        <h3>Ambiente acolhedor</h3>
        <p>Espaço pensado para você explorar títulos com conforto e tranquilidade.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon"><i class="fas fa-bookmark"></i></div>
        <h3>Acervo selecionado</h3>
        <p>Clássicos, raridades e lançamentos todos com um toque especial.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon"><i class="    fas fa-pen"></i></div>
        <h3>Cadastre seu livro favorito!</h3>
        <p>No Paragráfo42, você pode cadastrar seu livro favorito e ler quando quiser.</p>
      </div>
    </section>

  
    <div class="destaque-livraria">
      <div class="destaque-texto">
    
        <p>Desde 2026, a <strong>Parágrafo 42</strong> reúne leitores apaixonados. Nosso espaço é dedicado a histórias que marcam gerações. Venha conhecer nosso catálogo e encontrar seu próximo livro favorito.</p>
        <p style="margin-top: 1rem;"><i class="fas fa-star" style="color:#b78c5a;"></i> “Um livro é um sonho que seguramos na mão.” </p>
      </div>
     <img src="celularrr.png" style="height: 200px; width: auto;">
        
      </div>
    </div>

    
    <div style="text-align: center; margin: 2rem 0 3rem 0;">
      <span style="background: #e2d5c5; padding: 0.6rem 2rem; border-radius: 60px; color: #1f3133; font-weight: 500; border: 1px solid #b78c5a;">
        <i class="fas fa-arrow-right" style="color: #b78c5a;"></i> 
        Visite nossa estante virtual
      </span>
    </div>
  </main>


  <footer class="footer">
    <i class="fas fa-store-alt"></i>
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