<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parágrafo 42 · Pré-venda</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&display=swap" rel="stylesheet">
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
      color: #1e2b2c;
      line-height: 1.5;
    }

    /* Custom Sweet Alert Styles */
    .custom-swal {
      font-family: 'Cormorant Garamond', 'Georgia', serif;
      border-radius: 2rem !important;
      background: linear-gradient(145deg, #fcfaf7, #f5efe8) !important;
      border: 3px solid #b78c5a !important;
      box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2) !important;
    }

    .custom-swal .swal2-title {
      font-family: 'Cormorant Garamond', 'Georgia', serif;
      color: #1f3133 !important;
      font-weight: 700 !important;
      font-size: 1.8rem !important;
    }

    .custom-swal .swal2-html-container {
      font-family: 'Inter', sans-serif !important;
      color: #5a6e70 !important;
      font-size: 1rem !important;
    }

    .custom-swal .swal2-confirm {
      background: linear-gradient(135deg, #b78c5a, #9a7348) !important;
      border: none !important;
      border-radius: 50px !important;
      padding: 0.8rem 2rem !important;
      font-weight: 600 !important;
      font-family: 'Inter', sans-serif !important;
      transition: all 0.3s !important;
    }

    .custom-swal .swal2-confirm:hover {
      transform: scale(1.02) !important;
      background: linear-gradient(135deg, #c49a6a, #b78c5a) !important;
    }

    .custom-swal .swal2-cancel {
      background: transparent !important;
      border: 2px solid #b78c5a !important;
      color: #1f3133 !important;
      border-radius: 50px !important;
      padding: 0.8rem 2rem !important;
      font-weight: 600 !important;
      transition: all 0.3s !important;
    }

    .custom-swal .swal2-cancel:hover {
      background: #b78c5a20 !important;
    }

    .custom-swal .swal2-icon {
      border-color: #b78c5a !important;
    }

    .custom-swal .swal2-icon.swal2-success .swal2-success-ring {
      border-color: #b78c5a !important;
    }

    .custom-swal .swal2-icon.swal2-success [class^='swal2-success-line'] {
      background-color: #b78c5a !important;
    }

    .custom-swal .swal2-icon.swal2-warning {
      border-color: #e6c9a8 !important;
      color: #e6c9a8 !important;
    }

    .custom-swal .swal2-icon.swal2-error {
      border-color: #dc3545 !important;
    }

    /* NAVBAR */
    .navbar {
      background: linear-gradient(105deg, #1a2e30 0%, #1d3537 100%);
      padding: 0.8rem 2.5rem;
      border-bottom: 3px solid #b78c5a;
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
    }

    /* Hero Banner */
    .hero-banner {
      background: linear-gradient(135deg, #1f3133 0%, #2a484b 100%);
      margin: 1rem 2rem 2rem 2rem;
      padding: 3rem;
      border-radius: 3rem;
      text-align: center;
      position: relative;
      overflow: hidden;
      border: 2px solid #b78c5a;
    }

    .hero-banner::before {
      content: '';
      position: absolute;
      top: -50%;
      right: -20%;
      width: 300px;
      height: 300px;
      background: radial-gradient(circle, rgba(183,140,90,0.1) 0%, transparent 70%);
      border-radius: 50%;
    }

    .hero-banner::after {
      content: '';
      position: absolute;
      bottom: -30%;
      left: -10%;
      width: 250px;
      height: 250px;
      background: radial-gradient(circle, rgba(183,140,90,0.08) 0%, transparent 70%);
      border-radius: 50%;
    }

    .hero-banner h1 {
      font-size: 3rem;
      font-weight: 700;
      color: white;
      margin-bottom: 0.5rem;
    }

    .hero-banner h1 i {
      color: #b78c5a;
      margin-right: 10px;
    }

    .hero-banner p {
      color: #e6c9a8;
      font-size: 1.2rem;
      max-width: 600px;
      margin: 0 auto;
    }

    /* PÁGINA DE PRÉ-VENDA */
    .pre-venda-section {
      max-width: 1400px;
      margin: 2rem auto;
      padding: 0 2rem;
    }

    /* DESTAQUE PRINCIPAL */
    .pre-venda-destaque {
      background: linear-gradient(145deg, #ffffff, #f8f3ed);
      border-radius: 2rem;
      padding: 2rem;
      margin: 2rem 0;
      border: 2px solid #e8ddcf;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
      display: grid;
      grid-template-columns: 300px 1fr;
      gap: 2.5rem;
      transition: transform 0.3s;
    }

    .pre-venda-destaque:hover {
      transform: translateY(-5px);
      box-shadow: 0 25px 50px rgba(0, 0, 0, 0.12);
    }

    .destaque-capa {
      background: linear-gradient(135deg, #dacfbf, #b78c5a);
      border-radius: 1.5rem;
      overflow: hidden;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      border: 3px solid #b78c5a;
    }

    .destaque-capa img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s;
    }

    .destaque-capa img:hover {
      transform: scale(1.05);
    }

    .destaque-info h3 {
      font-size: 2.2rem;
      font-weight: 700;
      color: #1f3133;
      margin-bottom: 0.5rem;
    }

    .destaque-info .autor {
      font-size: 1.2rem;
      color: #b78c5a;
      font-weight: 500;
      margin-bottom: 1rem;
      display: inline-block;
      padding: 0.2rem 1rem;
      background: #f0e8de;
      border-radius: 30px;
    }

    .destaque-info .descricao {
      font-size: 1rem;
      color: #5a6e70;
      line-height: 1.6;
      margin-bottom: 1.5rem;
    }

    .preco-box {
      background: linear-gradient(135deg, #1f3133, #2a484b);
      padding: 1.2rem 1.8rem;
      border-radius: 1.5rem;
      display: inline-block;
      border: 2px solid #b78c5a;
      margin-bottom: 1.5rem;
    }

    .preco-antigo {
      text-decoration: line-through;
      color: #b78c5a;
      font-size: 1rem;
      display: block;
    }

    .preco-atual {
      font-size: 2.5rem;
      font-weight: 700;
      color: #e6c9a8;
    }

    .preco-parcelado {
      font-size: 0.85rem;
      color: #8a9b9d;
    }

    /* Contador Regressivo */
    .contador-regressivo {
      display: flex;
      gap: 1.5rem;
      margin: 1.5rem 0;
    }

    .contador-item {
      text-align: center;
      background: #f0e8de;
      padding: 0.8rem;
      border-radius: 1rem;
      min-width: 70px;
    }

    .contador-numero {
      font-size: 1.8rem;
      font-weight: 700;
      color: #1f3133;
    }

    .contador-label {
      font-size: 0.8rem;
      color: #7a8a8c;
      text-transform: uppercase;
    }

    .btn-pre-venda {
      background: linear-gradient(135deg, #b78c5a, #9a7348);
      border: none;
      color: white;
      font-weight: 700;
      font-size: 1.2rem;
      padding: 1rem 2.5rem;
      border-radius: 50px;
      display: inline-flex;
      align-items: center;
      gap: 12px;
      cursor: pointer;
      transition: all 0.3s;
      box-shadow: 0 5px 15px rgba(183, 140, 90, 0.3);
    }

    .btn-pre-venda:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(183, 140, 90, 0.4);
      background: linear-gradient(135deg, #c49a6a, #b78c5a);
    }

    /* Grid de livros */
    .section-header {
      text-align: center;
      margin: 3rem 0 2rem;
    }

    .section-header h2 {
      font-size: 2.2rem;
      font-weight: 700;
      color: #1f3133;
      position: relative;
      display: inline-block;
    }

    .section-header h2:after {
      content: '';
      display: block;
      width: 60px;
      height: 3px;
      background: #b78c5a;
      margin: 0.8rem auto 0;
      border-radius: 3px;
    }

    .pre-venda-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      gap: 2rem;
      margin: 2rem 0;
    }

    .livro-pre-card {
      background: white;
      border-radius: 1.5rem;
      overflow: hidden;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
      transition: all 0.3s ease;
      border: 1px solid #e8ddcf;
      position: relative;
    }

    .livro-pre-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
      border-color: #b78c5a;
    }

    .badge-pre {
      position: absolute;
      top: 15px;
      right: 15px;
      background: #b78c5a;
      color: #1f3133;
      font-weight: 700;
      padding: 0.3rem 1rem;
      border-radius: 30px;
      font-size: 0.75rem;
      z-index: 2;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }

    .livro-pre-capa {
      height: 250px;
      background: linear-gradient(145deg, #e8ddcf, #dacfbf);
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }

    .livro-pre-capa img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .livro-pre-info {
      padding: 1.5rem;
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
      color: #b78c5a;
      font-weight: 500;
      margin-bottom: 0.8rem;
    }

    .card-buttons {
      display: flex;
      gap: 0.8rem;
      justify-content: center;
      margin-top: 1rem;
    }

    .btn-card {
      background: transparent;
      border: 2px solid #b78c5a;
      color: #1f3133;
      font-weight: 600;
      padding: 0.5rem 1rem;
      border-radius: 40px;
      cursor: pointer;
      transition: all 0.3s;
      font-size: 0.85rem;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    .btn-card:hover {
      background: #b78c5a;
      color: white;
      transform: scale(1.02);
    }

    .btn-card i {
      font-size: 0.85rem;
    }

    /* Info Extra */
    .info-extra {
      background: linear-gradient(145deg, #f8f3ed, #efe6da);
      border-radius: 2rem;
      padding: 2rem;
      margin: 3rem 0;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 2rem;
      text-align: center;
      border: 1px solid #e8ddcf;
    }

    .info-item {
      transition: transform 0.3s;
    }

    .info-item:hover {
      transform: translateY(-5px);
    }

    .info-item i {
      font-size: 2.5rem;
      color: #b78c5a;
      margin-bottom: 0.8rem;
    }

    .info-item h4 {
      font-size: 1.2rem;
      font-weight: 700;
      color: #1f3133;
      margin-bottom: 0.3rem;
    }

    .info-item p {
      font-size: 0.9rem;
      color: #7a8a8c;
    }

    /* Newsletter */
    .newsletter {
      background: linear-gradient(135deg, #1f3133, #2a484b);
      border-radius: 2rem;
      padding: 3rem;
      text-align: center;
      margin: 3rem 0;
      border: 2px solid #b78c5a;
    }

    .newsletter h3 {
      font-size: 2rem;
      font-weight: 700;
      color: white;
      margin-bottom: 0.5rem;
    }

    .newsletter h3 i {
      color: #b78c5a;
    }

    .newsletter p {
      color: #e6c9a8;
      margin-bottom: 1.5rem;
    }

    .newsletter-input {
      display: flex;
      max-width: 500px;
      margin: 0 auto;
      gap: 1rem;
    }

    .newsletter-input input {
      flex: 1;
      padding: 0.9rem 1.2rem;
      border-radius: 50px;
      border: 2px solid #b78c5a;
      font-size: 1rem;
      outline: none;
      transition: all 0.3s;
    }

    .newsletter-input input:focus {
      box-shadow: 0 0 0 3px rgba(183, 140, 90, 0.3);
    }

    .newsletter-input button {
      background: #b78c5a;
      border: none;
      padding: 0.9rem 2rem;
      border-radius: 50px;
      font-weight: 700;
      color: #1f3133;
      cursor: pointer;
      transition: all 0.3s;
    }

    .newsletter-input button:hover {
      background: #c49a6a;
      transform: scale(1.02);
    }

    /* Modal */
    .modal-sinopse .modal-content {
      border-radius: 2rem;
      border: 3px solid #b78c5a;
      background: linear-gradient(145deg, #fcfaf7, #f5efe8);
    }

    .modal-sinopse .modal-header {
      border-bottom: 2px solid #b78c5a;
      background: linear-gradient(90deg, #1f3133, #2a484b);
      border-radius: 1.8rem 1.8rem 0 0;
      color: white;
    }

    .modal-sinopse .modal-title {
      font-weight: 700;
    }

    .modal-sinopse .modal-title i {
      color: #b78c5a;
    }

    .sinopse-container {
      padding: 1rem;
    }

    .sinopse-titulo {
      font-size: 1.6rem;
      font-weight: 700;
      color: #1f3133;
      margin-bottom: 1.5rem;
    }

    .sinopse-box {
      background: linear-gradient(145deg, #f8f4ee, #efe6da);
      padding: 1.8rem;
      border-radius: 1.2rem;
      border-left: 5px solid #b78c5a;
      position: relative;
    }

    .sinopse-box p {
      font-size: 1rem;
      line-height: 1.7;
      color: #4a5e60;
      text-align: justify;
    }

    .modal-footer {
      border-top: 2px solid #b78c5a;
      gap: 1rem;
    }

    .btn-pdf {
      background: linear-gradient(135deg, #b78c5a, #9a7348);
      border: none;
      color: white;
      font-weight: 600;
      padding: 0.6rem 1.5rem;
      border-radius: 50px;
      transition: all 0.3s;
    }

    .btn-pdf:hover {
      transform: scale(1.02);
      background: linear-gradient(135deg, #c49a6a, #b78c5a);
    }

    .btn-sair-modal {
      background: transparent;
      border: 2px solid #b78c5a;
      color: #1f3133;
      font-weight: 600;
      padding: 0.6rem 1.5rem;
      border-radius: 50px;
      transition: all 0.3s;
    }

    .btn-sair-modal:hover {
      background: #b78c5a;
      color: white;
    }

    /* Footer */
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
      .hero-banner h1 {
        font-size: 2rem;
      }
      .card-buttons {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>

<nav class="navbar fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center gap-2 text-white" href="#">
      <div style="background:#b78c5a; width:40px; height:40px; border-radius:50%; display:flex; align-items:center; justify-content:center;">
        <i class="fas fa-book-open" style="color:#1f3133;"></i>
      </div>
      <span style="font-weight:600;">Parágrafo <span style="color:#e6c9a8;">42</span></span>
    </a>

    <button class="navbar-toggler text-white border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuLateral">
      <i class="fas fa-bars"></i>
    </button>

    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="menuLateral">
      <div class="offcanvas-header" style="border-bottom: 2px solid #b78c5a;">
        <h5 class="offcanvas-title">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav gap-2">
          <li class="nav-item"><a class="nav-link text-white" href="{{ url('/home') }}"><i class="fas fa-home me-2"></i>Início</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="{{ url('/ebook') }}"><i class="fas fa-book-medical me-2"></i>Cadastre seu e-book</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="{{ url('/autor') }}"><i class="fas fa-feather me-2"></i>Cadastrar Autor</a></li>
          <li class="nav-item"><a class="nav-link text-warning fw-bold" href="{{ url('/prevendas') }}"><i class="fas fa-heart me-2"></i>Favoritar</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="{{ url('/dashboard') }}"><i class="fas fa-chart-line me-2"></i>Dashboard</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="{{ url('/login') }}"><i class="fas fa-clipboard-list me-2"></i>Login</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="{{ url('/perfil') }}"><i class="fas fa-user-circle me-2"></i>Perfil</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<main>
  <!-- Hero Banner -->
  <div class="hero-banner">
    <h1><i class="fas fa-clock"></i> Lançamentos em Pré-venda</h1>
    <p>Garanta os livros mais aguardados do ano com condições exclusivas</p>
  </div>

  <section class="pre-venda-section">
    <!-- DESTAQUE PRINCIPAL -->
    <div class="pre-venda-destaque">
      <div class="destaque-capa">
        <img src="vento.webp" alt="O Nome do Vento" onerror="this.src='https://via.placeholder.com/300x350?text=O+Nome+do+Vento'">
      </div>
      <div class="destaque-info">
        <h3>O Nome do Vento</h3>
        <span class="autor"><i class="fas fa-feather-alt"></i> Patrick Rothfuss</span>
        <div class="descricao">
          Edição especial de 15 anos com capa dura, ilustrações inéditas e conteúdo extra. 
          A obra-prima da fantasia moderna em uma versão exclusiva para colecionadores.
        </div>
        <div class="preco-box">
          <span class="preco-antigo">R$ 89,90</span>
          <div class="preco-atual">R$ 69,90</div>
          <div class="preco-parcelado">ou 3x de R$ 23,30 sem juros</div>
        </div>
        
        <div class="contador-regressivo">
          <div class="contador-item"><div class="contador-numero">15</div><div class="contador-label">dias</div></div>
          <div class="contador-item"><div class="contador-numero">08</div><div class="contador-label">horas</div></div>
          <div class="contador-item"><div class="contador-numero">32</div><div class="contador-label">min</div></div>
          <div class="contador-item"><div class="contador-numero">45</div><div class="contador-label">seg</div></div>
        </div>

        <button class="btn-pre-venda" onclick="confirmarPreVenda()">
          <i class="fas fa-cart-plus"></i> Garantir minha pré-venda
        </button>
      </div>
    </div>


    <div class="pre-venda-grid">
      @foreach ($ebooks as $ebook)
      <div class="livro-pre-card">
        <div class="badge-pre"><i class="fas fa-fire"></i> Pré-venda</div>
        <div class="livro-pre-capa">
          <img src="celular(1).png" alt="{{$ebook->titulo}}" onerror="this.style.display='none'; this.parentElement.innerHTML='<i class=\'fas fa-book\' style=\'font-size:5rem;color:#1f3133;\'></i>'">
        </div>
        <div class="livro-pre-info">
          <div class="livro-pre-titulo">{{$ebook->titulo}}</div>
          <div class="livro-pre-autor"><i class="fas fa-user"></i> {{$ebook->autor}}</div>
          <div class="card-buttons">
            <button class="btn-card btn-favoritar" onclick="favoritar({{$ebook->id}})">
              <i class="fas fa-heart"></i> Favoritar
            </button>
            <button class="btn-card btn-sinopse" 
            onclick='abrirSinopse({{ $ebook->id }}, {!! json_encode($ebook->titulo) !!}, {!! json_encode($ebook->sinopse) !!})'>
              <i class="fas fa-book-open"></i> Sinopse
            </button>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <!-- Info Extra -->
    <div class="info-extra">
      <div class="info-item"><i class="fas fa-truck"></i><h4>Frete Grátis</h4><p>Pedidos acima de R$150</p></div>
      <div class="info-item"><i class="fas fa-gift"></i><h4>Brinde Exclusivo</h4><p>Marca-página da coleção</p></div>
      <div class="info-item"><i class="fas fa-lock"></i><h4>Pagamento Seguro</h4><p>Compra protegida</p></div>
      <div class="info-item"><i class="fas fa-clock"></i><h4>Garantia de Preço</h4><p>Menor preço na pré-venda</p></div>
    </div>

    <!-- Newsletter -->
    <div class="newsletter">
      <h3><i class="fas fa-envelope"></i> Receba novidades</h3>
      <p>Cadastre-se e seja o primeiro a saber sobre novos lançamentos e ofertas</p>
      <div class="newsletter-input">
        <input type="email" id="newsletterEmail" placeholder="Seu melhor e-mail">
        <button onclick="inscreverNewsletter()">Assinar</button>
      </div>
    </div>
  </section>
</main>

<!-- Modal Sinopse -->
<div class="modal fade modal-sinopse" id="sinopseModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fas fa-book-open"></i> Sinopse</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body" id="sinopseModalBody"></div>
      <div class="modal-footer">
        <button class="btn-pdf" id="baixarPdfBtn"><i class="fas fa-file-pdf"></i> Baixar PDF</button>
        <button class="btn-sair-modal" data-bs-dismiss="modal"><i class="fas fa-times"></i> Fechar</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
// Configuração global do SweetAlert para usar o estilo customizado
const swalConfig = {
  customClass: {
    popup: 'custom-swal',
    confirmButton: 'swal2-confirm',
    cancelButton: 'swal2-cancel'
  },
  buttonsStyling: false,
  confirmButtonColor: '#b78c5a',
  cancelButtonColor: '#1f3133'
};


function favoritar(ebookId) {
  let token = $.cookie('token');
  fetch('/api/favoritar', {
    method: 'POST',
    headers: {'Content-Type': 'application/json'},
    body: JSON.stringify({ebook_id: ebookId, token: token})
  })
  .then(res => res.json())
  .then(data => {
    if(data.erro === 's'){
      Swal.fire({
        ...swalConfig,
        title: '❌ Erro',
        text: data.msg,
        icon: 'error',
        confirmButtonText: 'OK'
      });
    } else {
      Swal.fire({
        ...swalConfig,
        title: '❤️ Livro Favoritado!',
        html: `<p style="font-size:1rem;">O livro foi adicionado aos seus favoritos com sucesso!</p><i class="fas fa-heart" style="color:#b78c5a; font-size:3rem; margin-top:0.5rem;"></i>`,
        icon: 'success',
        confirmButtonText: '<i class="fas fa-check"></i> Continuar',
        timer: 3000,
        timerProgressBar: true
      });
    }
  });
}

function abrirSinopse(ebookId, titulo, sinopse) {
  currentEbookId = ebookId;
  const modalBody = document.getElementById('sinopseModalBody');
  modalBody.innerHTML = `
    <div class="sinopse-container">
      <h4 class="sinopse-titulo"><i class="fas fa-quote-left" style="color:#b78c5a;"></i> ${titulo}</h4>
      <div class="sinopse-box">
        <p>${sinopse || 'Sinopse não disponível para este livro.'}</p>
      </div>
    </div>
  `;
  const modal = new bootstrap.Modal(document.getElementById('sinopseModal'));
  modal.show();
}

document.addEventListener('click', function(e) {
  if (e.target.closest('#baixarPdfBtn')) {
    if (!currentEbookId) {
      Swal.fire({
        ...swalConfig,
        title: '❌ Erro',
        text: 'Nenhum livro selecionado.',
        icon: 'error',
        confirmButtonText: 'OK'
      });
      return;
    }
    
    Swal.fire({
      ...swalConfig,
      title: '📄 Gerando PDF...',
      html: '<div class="spinner-border text-warning" role="status" style="margin:1rem 0;"><span class="visually-hidden">Loading...</span></div><p>Aguarde um instante</p>',
      allowOutsideClick: false,
      showConfirmButton: false,
      didOpen: () => {
        Swal.showLoading();
      }
    });
    
    setTimeout(() => {
      window.open(`/api/ebooks/${currentEbookId}/pdf`, '_blank');
      Swal.fire({
        ...swalConfig,
        title: '✅ Download iniciado!',
        html: '<i class="fas fa-file-pdf" style="color:#b78c5a; font-size:3rem; margin:0.5rem 0;"></i><p>Seu PDF está sendo baixado</p>',
        icon: 'success',
        timer: 2000,
        timerProgressBar: true,
        showConfirmButton: false
      });
    }, 1000);
  }
});

function inscreverNewsletter() {
  const email = document.getElementById('newsletterEmail').value;
  if(!email || !email.includes('@')) {
    Swal.fire({
      ...swalConfig,
      title: '⚠️ Atenção',
      text: 'Por favor, insira um e-mail válido.',
      icon: 'warning',
      confirmButtonText: '<i class="fas fa-edit"></i> Corrigir'
    });
    return;
  }
  
  Swal.fire({
    ...swalConfig,
    title: '✉️ Inscrição confirmada!',
    html: `<p><b>${email}</b></p><p style="margin-top:0.5rem;">Você receberá novidades e ofertas exclusivas!</p><i class="fas fa-envelope-open-text" style="color:#b78c5a; font-size:3rem; margin-top:0.5rem;"></i>`,
    icon: 'success',
    confirmButtonText: '<i class="fas fa-check"></i> Obrigado!',
    timer: 4000,
    timerProgressBar: true
  });
  
  document.getElementById('newsletterEmail').value = '';
}

function confirmarPreVenda() {
  Swal.fire({
    ...swalConfig,
    title: '🎉 Pré-venda garantida!',
    html: `<p>Seu pedido foi registrado com sucesso.</p><p style="color:#b78c5a; font-weight:bold;">Você receberá um e-mail de confirmação</p><i class="fas fa-check-circle" style="color:#b78c5a; font-size:3rem; margin-top:0.5rem;"></i>`,
    icon: 'success',
    confirmButtonText: '<i class="fas fa-shopping-cart"></i> Continuar comprando',
    backdrop: `
      rgba(31,49,51,0.8)
      url("/images/books-pattern.png")
      left top
      no-repeat
    `
  });
}

// Função para loading genérico (caso precise)
function showLoading() {
  Swal.fire({
    ...swalConfig,
    title: 'Carregando...',
    allowOutsideClick: false,
    showConfirmButton: false,
    didOpen: () => {
      Swal.showLoading();
    }
  });
}

function closeSwal() {
  Swal.close();
}
</script>

<footer class="footer">
  <p><i class="fas fa-book"></i> Parágrafo 42 — Livros que transformam vidas</p>
  <div style="margin-top: 0.8rem;">
    <a href="#"><i class="fab fa-instagram"></i></a> · 
    <a href="#"><i class="fab fa-facebook"></i></a> · 
    <a href="#"><i class="fas fa-envelope"></i></a>
  </div>
  <p><small>&copy; 2025 Parágrafo 42 — Todos os direitos reservados</small></p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
let currentEbookId = null;

function favoritar(ebookId) {
  let token = $.cookie('token');
  fetch('/api/favoritar', {
    method: 'POST',
    headers: {'Content-Type': 'application/json'},
    body: JSON.stringify({ebook_id: ebookId, token: token})
  })
  .then(res => res.json())
  .then(data => {
    if(data.erro === 's'){
      Swal.fire('Erro', data.msg, 'error');
    } else {
      Swal.fire('❤️ Favoritado!', 'Livro adicionado aos favoritos!', 'success');
    }
  });
}

function abrirSinopse(ebookId, titulo, sinopse) {
  currentEbookId = ebookId;
  const modalBody = document.getElementById('sinopseModalBody');
  modalBody.innerHTML = `
    <div class="sinopse-container">
      <h4 class="sinopse-titulo"><i class="fas fa-quote-left" style="color:#b78c5a;"></i> ${titulo}</h4>
      <div class="sinopse-box">
        <p>${sinopse || 'Sinopse não disponível para este livro.'}</p>
      </div>
    </div>
  `;
  const modal = new bootstrap.Modal(document.getElementById('sinopseModal'));
  modal.show();
}

document.addEventListener('click', function(e) {
  if (e.target.closest('#baixarPdfBtn')) {
    if (!currentEbookId) {
      Swal.fire('Erro', 'Nenhum livro selecionado.', 'error');
      return;
    }
    Swal.fire({title: '📄 Gerando PDF...', text: 'Aguarde um instante', allowOutsideClick: false, didOpen: () => { Swal.showLoading(); }});
    setTimeout(() => {
      window.open(`/api/ebooks/${currentEbookId}/pdf`, '_blank');
      Swal.fire({title: '✅ Download iniciado!', icon: 'success', timer: 1500, showConfirmButton: false});
    }, 1000);
  }
});

function inscreverNewsletter() {
  const email = document.getElementById('newsletterEmail').value;
  if(!email || !email.includes('@')) {
    Swal.fire('Atenção', 'Insira um e-mail válido.', 'warning');
    return;
  }
  Swal.fire({title: '✉️ Inscrição confirmada!', html: `<p><b>${email}</b></p>`, icon: 'success', confirmButtonColor: '#b78c5a'});
}

function confirmarPreVenda() {
  Swal.fire({title: 'Pré-venda garantida!', text: 'Seu pedido foi registrado com sucesso.', icon: 'success', confirmButtonColor: '#b78c5a'});
}


/* =========================
   FAVORITAR
========================= */
function favoritar(ebookId) {
  let token = $.cookie('token');

  fetch('/api/favoritar', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({
      ebook_id: ebookId,
      token: token // 👈 ESSENCIAL
    })
  })
  .then(res => res.json())
  .then(data => {
    console.log(data);

    if(data.erro === 's'){
      Swal.fire('Erro', data.msg, 'error');
    } else {
      Swal.fire('❤️ Favoritado!', 'Livro adicionado!', 'success');
    }
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

</body>
</html>