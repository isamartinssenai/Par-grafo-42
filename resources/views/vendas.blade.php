<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parágrafo 42 · pré-venda</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Sweet Alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
      padding-top: 80px;
      font-family: 'Cormorant Garamond', 'Georgia', serif;
      background-image: url('chat.png');
      background-size: contain;
      color: #1e2b2c;
      line-height: 1.5;
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

    /* =========================
   SINOPSE PREMIUM
========================= */

.sinopse-premium {
  border-radius: 2rem;
  border: 2px solid #b78c5a;
  background: linear-gradient(145deg, #fcfaf7, #f2eadf);
  overflow: hidden;
}

/* HEADER */
.sinopse-header {
  background: linear-gradient(90deg, #1f3133, #2d4a4d);
  color: white;
  border-bottom: 2px solid #b78c5a;
}

.sinopse-header .modal-title {
  font-weight: 600;
  display: flex;
  align-items: center;
  gap: 10px;
}

.sinopse-header i {
  color: #e6c9a8;
}

/* BODY */
.sinopse-container {
  padding: 1rem;
}

.sinopse-titulo {
  color: #1f3133;
  font-size: 1.6rem;
  font-weight: 700;
  margin-bottom: 1.5rem;
}

/* CAIXA BONITA */
.sinopse-box {
  background: linear-gradient(145deg, #f8f4ee, #efe6da);
  padding: 1.8rem;
  border-radius: 1.2rem;
  border: 1px solid #e2d5c3;
  position: relative;
  box-shadow: 0 10px 25px rgba(0,0,0,0.08);
  transition: 0.3s;
}

.sinopse-box:hover {
  transform: translateY(-4px);
  box-shadow: 0 15px 35px rgba(0,0,0,0.12);
}

/* BARRA LATERAL */
.sinopse-box::before {
  content: "";
  position: absolute;
  left: 0;
  top: 15px;
  bottom: 15px;
  width: 6px;
  border-radius: 10px;
  background: linear-gradient(to bottom, #b78c5a, #8c6a45);
}

.sinopse-box p {
  font-size: 1.05rem;
  line-height: 1.8;
  color: #3f5355;
  margin: 0;
  text-align: justify;
}

/* FOOTER */
.sinopse-footer {
  border-top: 2px solid #b78c5a;
  display: flex;
  justify-content: flex-end;
  gap: 1rem;
  padding: 1rem 1.5rem;
}

/* BOTÕES MELHORADOS */
.btn-pdf {
  background: linear-gradient(135deg, #b78c5a, #8c6a45);
  border: none;
  color: white;
  font-weight: 600;
  padding: 0.6rem 1.5rem;
  border-radius: 50px;
  transition: 0.3s;
}

.btn-pdf:hover {
  transform: scale(1.05);
  background: #1f3133;
  color: #e6c9a8;
}

.btn-sair-modal {
  background: transparent;
  border: 2px solid #b78c5a;
  color: #1f3133;
  font-weight: 600;
  padding: 0.6rem 1.5rem;
  border-radius: 50px;
  transition: 0.3s;
}

.btn-sair-modal:hover {
  background: #b78c5a;
  color: white;
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

    /* PÁGINA DE PRÉ-VENDA */
    .pre-venda-section {
      max-width: 1200px;
      margin: 4rem auto;
      padding: 0 2rem;
    }

    .pre-venda-titulo {
      text-align: center;
      margin-bottom: 2.5rem;
    }

    .pre-venda-titulo h2 {
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

    .pre-venda-titulo h2 i {
      color: #b78c5a;
      margin-right: 10px;
    }

    .pre-venda-subtitulo {
      text-align: center;
      margin-top: 1rem;
      font-size: 1.2rem;
      color: #5f7375;
    }

    .pre-venda-destaque {
      background: linear-gradient(145deg, #f0e8de, #e7ddd1);
      border-radius: 3rem;
      padding: 2.5rem;
      margin: 3rem 0;
      border: 2px solid #b78c5a70;
      display: grid;
      grid-template-columns: 300px 1fr;
      gap: 2.5rem;
      align-items: center;
      box-shadow: 0 20px 30px -10px #1f3133;
    }

    .destaque-capa {
      width: 100%;
      height: 350px;
      background: linear-gradient(135deg, #dacfbf, #b78c5a);
      border-radius: 2rem;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 3px solid #b78c5a;
      overflow: hidden;
    }

    .destaque-capa img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .destaque-info h3 {
      font-size: 2.2rem;
      color: #1f3133;
      margin-bottom: 0.5rem;
    }

    .destaque-info .autor {
      font-size: 1.3rem;
      color: #b78c5a;
      font-style: italic;
      margin-bottom: 1rem;
    }

    .destaque-info .descricao {
      font-size: 1.1rem;
      color: #3f5355;
      margin-bottom: 1.5rem;
      line-height: 1.6;
    }

    .preco-box {
      background: #1f3133;
      padding: 1.5rem;
      border-radius: 2rem;
      color: white;
      margin: 1.5rem 0;
      display: inline-block;
      border: 2px solid #b78c5a;
    }

    .preco-antigo {
      text-decoration: line-through;
      color: #b78c5a;
      font-size: 1.1rem;
    }

    .preco-atual {
      font-size: 2.5rem;
      font-weight: 700;
      color: #e6c9a8;
    }

    .preco-parcelado {
      font-size: 0.9rem;
      color: #8a9b9d;
    }

    .contador-regressivo {
      display: flex;
      gap: 1.5rem;
      margin: 2rem 0;
    }

    .contador-item {
      text-align: center;
    }

    .contador-numero {
      background: #f0e8de;
      width: 70px;
      height: 70px;
      border-radius: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
      font-weight: 700;
      color: #1f3133;
      border: 2px solid #b78c5a;
    }

    .contador-label {
      margin-top: 0.5rem;
      color: #5f7375;
      font-size: 0.9rem;
    }

    .btn-pre-venda {
      background: #b78c5a;
      border: none;
      color: #1f3133;
      font-weight: 700;
      font-size: 1.3rem;
      padding: 1.2rem 3rem;
      border-radius: 60px;
      display: inline-flex;
      align-items: center;
      gap: 15px;
      cursor: pointer;
      transition: 0.3s;
      border: 2px solid #1f3133;
      margin-top: 1rem;
    }

    .btn-pre-venda:hover {
      background: #1f3133;
      color: white;
      transform: scale(1.05);
    }

    .btn-pre-venda:hover i {
      color: #b78c5a;
    }

    /* Grid de livros em pré-venda */
    .pre-venda-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
      gap: 2rem;
      margin: 3rem 0;
    }

    .livro-pre-card {
      background: white;
      border-radius: 2rem;
      overflow: hidden;
      box-shadow: 0 15px 25px -10px rgba(0,0,0,0.2);
      transition: 0.3s;
      border: 1px solid #e5d8ca;
      position: relative;
    }

    .livro-pre-card:hover {
      transform: translateY(-10px);
      border-color: #b78c5a;
      box-shadow: 0 25px 35px -12px #1f3133;
    }

    .badge-pre {
      position: absolute;
      top: 10px;
      right: 10px;
      background: #b78c5a;
      color: #1f3133;
      font-weight: 700;
      padding: 0.4rem 1rem;
      border-radius: 30px;
      font-size: 0.8rem;
      z-index: 2;
      border: 2px solid white;
    }

    .livro-pre-capa {
      height: 220px;
      background: linear-gradient(145deg, #dacfbf, #b78c5a30);
      display: flex;
      align-items: center;
      justify-content: center;
      border-bottom: 3px solid #b78c5a;
      overflow: hidden;
    }

    .livro-pre-capa img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .livro-pre-info {
      padding: 1.2rem;
      text-align: center;
    }

    .livro-pre-titulo {
      font-weight: 700;
      font-size: 1.2rem;
      color: #1f3133;
      margin-bottom: 0.3rem;
    }

    .livro-pre-autor {
      font-size: 0.9rem;
      color: #6d7b7d;
      font-style: italic;
      margin-bottom: 0.5rem;
    }

    .livro-pre-preco {
      font-size: 1.3rem;
      font-weight: 700;
      color: #b78c5a;
      margin: 0.5rem 0;
    }

    .livro-pre-preco small {
      font-size: 0.8rem;
      color: #8a9b9d;
      text-decoration: line-through;
    }

    /* Container dos botões no card */
    .card-buttons {
      display: flex;
      gap: 0.6rem;
      margin-top: 0.8rem;
      justify-content: center;
    }

    .btn-card {
      background: transparent;
      border: 2px solid #b78c5a;
      color: #1f3133;
      font-weight: 600;
      padding: 0.5rem 0.8rem;
      border-radius: 40px;
      cursor: pointer;
      transition: 0.3s;
      font-size: 0.8rem;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    .btn-card i {
      font-size: 0.85rem;
    }

    .btn-card:hover {
      background: #b78c5a;
      color: white;
    }

    .btn-favoritar:hover {
      background: #b78c5a;
      color: white;
    }

    .btn-sinopse:hover {
      background: #b78c5a;
      color: white;
    }

    /* Modal personalizado (mantendo estilo) */
    .modal-sinopse .modal-content {
      border-radius: 2rem;
      border: 3px solid #b78c5a;
      background: #fcfaf7;
      color: #1f3133;
    }

    .modal-sinopse .modal-header {
      border-bottom: 2px solid #b78c5a;
      background: #f0e8de;
      border-radius: 1.8rem 1.8rem 0 0;
    }

    .modal-sinopse .modal-header .btn-close {
      background-color: #b78c5a;
      opacity: 1;
      border-radius: 50%;
    }

    .modal-sinopse .modal-title {
      font-weight: 700;
      color: #1f3133;
    }

    .modal-sinopse .modal-body {
      font-size: 1rem;
      line-height: 1.6;
      max-height: 400px;
      overflow-y: auto;
    }

    .modal-footer-buttons {
      display: flex;
      gap: 1rem;
      justify-content: flex-end;
    }

    .btn-pdf {
      background: #b78c5a;
      border: none;
      color: #1f3133;
      font-weight: 600;
      padding: 0.6rem 1.5rem;
      border-radius: 50px;
      transition: 0.3s;
    }

    .btn-pdf:hover {
      background: #1f3133;
      color: #e6c9a8;
    }

    .btn-sair-modal {
      background: transparent;
      border: 2px solid #b78c5a;
      color: #1f3133;
      font-weight: 600;
      padding: 0.6rem 1.5rem;
      border-radius: 50px;
      transition: 0.3s;
    }

    .btn-sair-modal:hover {
      background: #b78c5a;
      color: white;
    }

    .btn-pre-small {
      background: transparent;
      border: 2px solid #b78c5a;
      color: #1f3133;
      font-weight: 600;
      padding: 0.6rem 1.2rem;
      border-radius: 40px;
      cursor: pointer;
      transition: 0.3s;
      width: 100%;
      margin-top: 0.5rem;
    }

    .btn-pre-small:hover {
      background: #b78c5a;
      color: white;
    }

    .info-extra {
      background: #f0e8de;
      border-radius: 2rem;
      padding: 2rem;
      margin: 3rem 0;
      border: 2px dashed #b78c5a;
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      gap: 2rem;
    }

    .info-item {
      text-align: center;
    }

    .info-item i {
      font-size: 2.5rem;
      color: #b78c5a;
      margin-bottom: 0.5rem;
    }

    .info-item h4 {
      color: #1f3133;
      margin-bottom: 0.3rem;
    }

    .info-item p {
      color: #5f7375;
    }

    .newsletter {
      background: #1f3133;
      border-radius: 3rem;
      padding: 2.5rem;
      text-align: center;
      color: white;
      margin-top: 3rem;
    }

    .newsletter h3 {
      font-size: 2rem;
      margin-bottom: 1rem;
    }

    .newsletter h3 i {
      color: #b78c5a;
    }

    .newsletter-input {
      display: flex;
      max-width: 500px;
      margin: 1.5rem auto;
      gap: 1rem;
    }

    .newsletter-input input {
      flex: 1;
      padding: 1rem 1.5rem;
      border-radius: 50px;
      border: 2px solid #b78c5a;
      font-size: 1rem;
      background: white;
    }

    .newsletter-input button {
      background: #b78c5a;
      border: none;
      padding: 0 2rem;
      border-radius: 50px;
      font-weight: 600;
      color: #1f3133;
      cursor: pointer;
      transition: 0.3s;
      border: 2px solid white;
    }

    .newsletter-input button:hover {
      background: white;
    }

    .ver-mais-btn {
      text-align: center;
      margin-top: 2rem;
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

    @media (max-width: 768px) {
      .pre-venda-destaque {
        grid-template-columns: 1fr;
      }
      .contador-regressivo {
        justify-content: center;
      }
      .newsletter-input {
        flex-direction: column;
      }
      .card-buttons {
        flex-direction: column;
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

  
<main>
  <section class="pre-venda-section">
    <div class="pre-venda-titulo">
      <h2><i class="fas fa-clock"></i> Lançamentos para favoritar!</h2>
      <div class="pre-venda-subtitulo"></div>
    </div>

    <!-- DESTAQUE PRINCIPAL -->
    <div class="pre-venda-destaque">
      <div class="destaque-capa">
        <img src="vento.webp" alt="O Nome do Vento" onerror="this.src='https://via.placeholder.com/300x350?text=O+Nome+do+Vento'">
      </div>
      <div class="destaque-info">
        <h3>O Nome do Vento</h3>
        <div class="autor">Patrick Rothfuss</div>
        <div class="descricao">
          Edição especial de 15 anos com capa dura, ilustrações inéditas e 
          conteúdo extra. A obra-prima da fantasia moderna em uma versão 
          exclusiva para colecionadores.
        </div>
        <div class="preco-box">
          <span class="preco-antigo">R$ 89,90</span>
          <div class="preco-atual">R$ 69,90</div>
          <div class="preco-parcelado">ou 3x de R$ 23,30 sem juros</div>
        </div>
        
        <!-- CONTADOR REGRESSIVO -->
        <div class="contador-regressivo">
          <div class="contador-item">
            <div class="contador-numero">15</div>
            <div class="contador-label">dias</div>
          </div>
          <div class="contador-item">
            <div class="contador-numero">08</div>
            <div class="contador-label">horas</div>
          </div>
          <div class="contador-item">
            <div class="contador-numero">32</div>
            <div class="contador-label">minutos</div>
          </div>
        </div>

        <!-- BOTÃO COM SWEET ALERT -->
        <button class="btn-pre-venda" onclick="confirmarPreVenda()">
          <i class="fas fa-cart-plus"></i> Garantir minha pré-venda
        </button>
      </div>
    </div>

    <!-- GRID DE LIVROS COM BOTÕES FAVORITAR E SINOPSE -->
    <div class="pre-venda-grid">
      @foreach ($ebooks as $ebook)
      <div class="livro-pre-card">
        <div class="livro-pre-capa">
          <img src="celular(1).png" alt="{{$ebook->titulo}}" onerror="this.style.display='none'; this.parentElement.innerHTML='<i class=\'fas fa-book\' style=\'font-size:5rem;color:#1f3133;\'></i>'">
        </div>
        <div class="livro-pre-info">
          <div class="livro-pre-titulo">{{$ebook->titulo}}</div>
          <div class="livro-pre-autor">{{$ebook->autor}}</div>
          
          <!-- Botões pequenos de favoritar e abrir sinopse -->
          <div class="card-buttons">
            <button class="btn-card btn-favoritar" onclick="favoritar({{$ebook->id}})">
              <i class="fas fa-heart"></i> Favoritar
            </button>
            <button class="btn-card btn-sinopse" onclick="abrirSinopse({{$ebook->id}}, '{{ addslashes($ebook->titulo) }}', '{{ addslashes($ebook->sinopse) }}')">
              <i class="fas fa-book-open"></i> Sinopse
            </button>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <!-- INFORMAÇÕES EXTRAS -->
    <div class="info-extra">
      <div class="info-item">
        <i class="fas fa-truck"></i>
        <h4>Frete Grátis</h4>
        <p>Para pedidos acima de R$ 150</p>
      </div>
      <div class="info-item">
        <i class="fas fa-gift"></i>
        <h4>Brinde Exclusivo</h4>
        <p>Marca-página da coleção</p>
      </div>
      <div class="info-item">
        <i class="fas fa-lock"></i>
        <h4>Pagamento Seguro</h4>
        <p>Compra protegida</p>
      </div>
      <div class="info-item">
        <i class="fas fa-clock"></i>
        <h4>Garantia de Preço</h4>
        <p>Menor preço na pré-venda</p>
      </div>
    </div>
  </section>
</main>

<!-- MODAL PARA SINOPSE (com botão de baixar PDF e sair) -->
<div class="modal fade modal-sinopse" id="sinopseModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content sinopse-premium">

      <div class="modal-header sinopse-header">
        <h5 class="modal-title">
          <i class="fas fa-book-open"></i> Sinopse
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body" id="sinopseModalBody"></div>

      <div class="modal-footer sinopse-footer">
        <button class="btn-pdf" id="baixarPdfBtn">
          <i class="fas fa-file-pdf"></i> Baixar PDF
        </button>

        <button class="btn-sair-modal" data-bs-dismiss="modal">
          <i class="fas fa-times"></i> Fechar
        </button>
      </div>

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
let currentEbookId = null;

/* =========================
   FAVORITAR
========================= */
function favoritar(ebookId) {
  let token = $.cookie('token');

  fetch('/api/favoritar', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'Authorization': 'Bearer ' + token,
      'token': token
    },
    body: JSON.stringify({
      ebook_id: ebookId,
      token: token
    })
  })
  .then(res => res.json())
  .then(data => {
    if(data.erro === 's'){
      Swal.fire('Erro', data.msg, 'error');
    } else {
      Swal.fire('❤️ Favoritado!', 'Livro adicionado aos favoritos!', 'success');
    }
  })
  .catch(() => {
    Swal.fire('Erro', 'Não foi possível favoritar o livro.', 'error');
  });
}


/* =========================
   ABRIR SINOPSE
========================= */
function abrirSinopse(ebookId, titulo, sinopse) {
  currentEbookId = ebookId;

  const modalBody = document.getElementById('sinopseModalBody');

  modalBody.innerHTML = `
    <div class="sinopse-container">

      <h4 class="sinopse-titulo">
        ${titulo}
      </h4>

      <div class="sinopse-box">
        <p>
          ${sinopse || 'Sinopse não disponível para este livro.'}
        </p>
      </div>

    </div>
  `;

  const modal = new bootstrap.Modal(document.getElementById('sinopseModal'));
  modal.show();
}


/* =========================
   DOWNLOAD PDF (CORRIGIDO)
========================= */
document.addEventListener('click', function(e) {
  if (e.target.closest('#baixarPdfBtn')) {

    if (!currentEbookId) {
      Swal.fire('Erro', 'Nenhum livro selecionado.', 'error');
      return;
    }

    // feedback visual
    Swal.fire({
      title: '📄 Gerando PDF...',
      text: 'Aguarde um instante',
      allowOutsideClick: false,
      didOpen: () => {
        Swal.showLoading();
      }
    });

    // abre o download
    setTimeout(() => {
      window.open(`/api/ebooks/${currentEbookId}/pdf`, '_blank');

      Swal.fire({
        title: '✅ Download iniciado!',
        icon: 'success',
        timer: 1500,
        showConfirmButton: false
      });

    }, 1000);
  }
});


/* =========================
   NEWSLETTER
========================= */
function inscreverNewsletter() {
  const email = document.getElementById('newsletterEmail').value;

  if(!email || !email.includes('@')) {
    Swal.fire('Atenção', 'Insira um e-mail válido.', 'warning');
    return;
  }

  Swal.fire({
    title: '✉️ Inscrição confirmada!',
    html: `<p><b>${email}</b></p>`,
    icon: 'success',
    confirmButtonColor: '#b78c5a'
  });
}


/* =========================
   VER MAIS
========================= */
function verMaisLancamentos() {
  Swal.fire({
    title: '🔍 Carregando...',
    timer: 1500,
    showConfirmButton: false
  });
}


/* =========================
   PRÉ-VENDA
========================= */
function confirmarPreVenda() {
  Swal.fire({
    title: 'Pré-venda garantida!',
    text: 'Seu pedido foi registrado com sucesso.',
    icon: 'success',
    confirmButtonColor: '#b78c5a'
  });
}
</script>

<footer class="footer">
  <p><i class="fas fa-book"></i> Parágrafo 42 — Livros que transformam</p>
  <p><small>&copy; 2025 — Todos os direitos reservados</small></p>
</footer>

</body>
</html>