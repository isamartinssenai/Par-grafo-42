<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parágrafo 42 · Publique seu eBook grátis</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      background-repeat: no-repeat;
      color: #1e2b2c;
      line-height: 1.5;
      position: relative;
    }

    /* Overlay para melhor legibilidade do texto sobre a imagem de fundo */
    body::before {
      content: '';
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: -1;
    }

    /* Navbar mantido */
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

    /* Seção Sobre a Livraria */
    .about-section {
      max-width: 1200px;
      margin: 0 auto;
      padding: 2rem;
    }

    .about-card {
      background: white;
      border-radius: 2rem;
      padding: 2.5rem;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
      border: 1px solid #e8ddcf;
      margin-bottom: 2rem;
    }

    .about-title {
      font-size: 2.5rem;
      font-weight: 700;
      color: #1f3133;
      text-align: center;
      margin-bottom: 1.5rem;
    }

    .about-title i {
      color: #b78c5a;
      margin-right: 10px;
    }

    .about-text {
      font-size: 1.2rem;
      line-height: 1.6;
      color: #4f5f61;
      text-align: center;
      max-width: 800px;
      margin: 0 auto;
    }

    .highlight {
      color: #b78c5a;
      font-weight: 700;
    }

    /* Grid de destaques */
    .highlight-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
      margin: 2rem 0;
    }

    .highlight-item {
      text-align: center;
      padding: 1.5rem;
      background: #f8f3ed;
      border-radius: 1.5rem;
      transition: all 0.3s;
    }

    .highlight-item:hover {
      transform: translateY(-5px);
      background: white;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .highlight-icon {
      background: #1f3133;
      width: 70px;
      height: 70px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1rem auto;
      color: #b78c5a;
      font-size: 2rem;
    }

    .highlight-item h3 {
      font-size: 1.4rem;
      font-weight: 700;
      color: #1f3133;
      margin-bottom: 0.5rem;
    }

    .highlight-item p {
      color: #6b7e80;
    }

    /* Banner para autores */
    .author-banner {
      background: linear-gradient(135deg, #1f3133 0%, #2a484b 100%);
      border-radius: 2rem;
      margin: 2rem 0;
      padding: 3rem;
      text-align: center;
      border: 2px solid #b78c5a;
    }

    .author-banner h2 {
      font-size: 2rem;
      font-weight: 700;
      color: white;
      margin-bottom: 1rem;
    }

    .author-banner h2 i {
      color: #b78c5a;
      margin-right: 10px;
    }

    .author-banner p {
      color: #e6c9a8;
      font-size: 1.2rem;
      margin-bottom: 1.5rem;
    }

    .btn-author {
      background: #b78c5a;
      color: #1f3133;
      border: none;
      padding: 0.8rem 2rem;
      border-radius: 50px;
      font-weight: 700;
      font-size: 1.1rem;
      transition: all 0.2s;
      text-decoration: none;
      display: inline-block;
    }

    .btn-author:hover {
      background: #d4a06a;
      transform: scale(1.02);
      color: #1f3133;
    }

    /* Como funciona */
    .how-it-works {
      background: #e7ddd1;
      margin: 3rem 2rem;
      padding: 3rem;
      border-radius: 3rem;
    }

    .steps {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 2rem;
      max-width: 1000px;
      margin: 0 auto;
    }

    .step {
      text-align: center;
    }

    .step-number {
      background: #b78c5a;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1rem auto;
      font-size: 1.5rem;
      font-weight: 700;
      color: #1f3133;
    }

    .step h4 {
      font-weight: 700;
      color: #1f3133;
      margin-bottom: 0.5rem;
    }

    .step p {
      color: #5a6e70;
    }

    /* Depoimentos */
    .testimonials {
      background: rgba(255, 255, 255, 0.9);
      margin: 2rem 2rem;
      padding: 2rem;
      border-radius: 3rem;
      backdrop-filter: blur(2px);
    }

    .testimonial-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
      max-width: 1100px;
      margin: 0 auto;
    }

    .testimonial-card {
      background: white;
      padding: 1.8rem;
      border-radius: 1.5rem;
      text-align: center;
      box-shadow: 0 8px 20px rgba(0,0,0,0.05);
    }

    .testimonial-card i {
      color: #b78c5a;
      font-size: 2rem;
      margin-bottom: 1rem;
    }

    .testimonial-text {
      font-style: italic;
      color: #4f5f61;
      margin-bottom: 1rem;
    }

    .testimonial-name {
      font-weight: 700;
      color: #1f3133;
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

    .hero {
      max-width: 1200px;
      margin: 0 auto;
      padding: 1rem 2rem;
      text-align: center;
    }

    @media (max-width: 600px) {
      .navbar {
        flex-direction: column;
        gap: 0.8rem;
        padding: 1rem;
      }
      .about-title {
        font-size: 1.8rem;
      }
      .how-it-works {
        padding: 1.5rem;
        margin: 1.5rem;
      }
      .testimonials {
        padding: 1rem;
        margin: 1.5rem;
      }
    }
  </style>
</head>
<body>

<!-- NAVBAR (mantido) -->
<nav class="navbar fixed-top" style="background: linear-gradient(105deg, #1a2e30 0%, #1d3537 100%); border-bottom: 3px solid #b78c5a;">
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
          <li class="nav-item">
            <a class="nav-link text-warning fw-bold" href="{{ url('/home') }}">
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
  <!-- IMAGEM DO TOPO -->
  <section class="hero">
    <img src="celular (1).png" style="height: 180px; width: auto;" alt="Parágrafo 42">
  </section>

  <!-- SEÇÃO SOBRE A LIVRARIA - COMO SURGIU -->
  <div class="about-section">
    <div class="about-card">
      <h1 class="about-title">
        <i class="fas fa-book"></i> A História da Parágrafo 42
      </h1>
      <p class="about-text">
        Tudo começou em um pequeno sebo no centro de Tatuí, em 2026. 
        <strong class="highlight">Isabelli, Giovanna e Maria Eduarda</strong>, três amigas apaixonados por livros, sonhavam com um espaço onde autores independentes pudessem 
        compartilhar suas histórias sem barreiras. Foi assim que nasceu a <strong class="highlight">Parágrafo 42</strong> — uma livraria digital 
        que une leitores e escritores em uma só comunidade.
      </p>
      <br>
      <p class="about-text">
        O nome "42" é uma homenagem à famosa resposta para "o sentido da vida, do universo e tudo mais" — porque 
        acreditamos que os livros também carregam respostas, perguntas e infinitas possibilidades.
      </p>
    </div>

    <!-- DIFERENCIAIS -->
    <div class="highlight-grid">
      <div class="highlight-item">
        <div class="highlight-icon">
          <i class="fas fa-gem"></i>
        </div>
        <h3>Curadoria Especial</h3>
        <p>Selecionamos obras originais e de qualidade para você</p>
      </div>
      <div class="highlight-item">
        <div class="highlight-icon">
          <i class="fas fa-users"></i>
        </div>
        <h3>Comunidade Ativa</h3>
        <p>Troque ideias com autores e leitores em nosso fórum</p>
      </div>
      <div class="highlight-item">
        <div class="highlight-icon">
          <i class="fas fa-trophy"></i>
        </div>
        <h3>Prêmio Parágrafo 42</h3>
        <p>Anualmente premiamos os melhores autores independentes</p>
      </div>
    </div>

    <!-- BANNER PARA AUTORES - DESTAQUE PRINCIPAL -->
    <div class="author-banner">
      <h2>
        <i class="fas fa-feather-alt"></i> Publique seu eBook de graça!
      </h2>
      <p>
        Na Parágrafo 42, você se cadastra como autor e publica seus livros <strong>sem pagar nada</strong>. 
        Chega de barreiras! Queremos dar voz a todos os escritores.
      </p>
      <a href="{{ url('/autor') }}" class="btn-author">
        <i class="fas fa-user-plus"></i> Quero ser um autor
      </a>
    </div>
  </div>

  <!-- COMO FUNCIONA -->
  <div class="how-it-works">
    <h2 class="section-title" style="color: #1f3133;">Como funciona? É simples!</h2>
    <div class="steps">
      <div class="step">
        <div class="step-number">1</div>
        <h4>Cadastre-se</h4>
        <p>Crie sua conta como autor gratuitamente</p>
      </div>
      <div class="step">
        <div class="step-number">2</div>
        <h4>Publique</h4>
        <p>Envie seu eBook e aguarde a aprovação</p>
      </div>
      <div class="step">
        <div class="step-number">3</div>
        <h4>Compartilhe</h4>
        <p>Seu livro fica disponível para milhares de leitores</p>
      </div>
      <div class="step">
        <div class="step-number">4</div>
        <h4>Ganhe visibilidade</h4>
        <p>Divulgamos seu trabalho em nossas redes e newsletters</p>
      </div>
    </div>
  </div>

  <!-- DEPOIMENTOS DE AUTORES -->
  <div class="testimonials">
    <h2 class="section-title" style="color: #1f3133;">O que nossos autores dizem:</h2>
    <div class="testimonial-grid">
      <div class="testimonial-card">
        <i class="fas fa-quote-left"></i>
        <p class="testimonial-text">"Publiquei meu primeiro livro na Parágrafo 42 e em 3 meses já tive mais de 500 downloads! Gratidão eterna."</p>
        <div class="testimonial-name">— Marcela Alves</div>
      </div>
      <div class="testimonial-card">
        <i class="fas fa-quote-left"></i>
        <p class="testimonial-text">"A plataforma é muito fácil de usar e o suporte é incrível. Recomendo para todo escritor independente!"</p>
        <div class="testimonial-name">— Rafael Mendonça</div>
      </div>
      <div class="testimonial-card">
        <i class="fas fa-quote-left"></i>
        <p class="testimonial-text">"Finalmente um lugar que valoriza autores iniciantes. Publiquei de graça e já estou escrevendo meu segundo livro."</p>
        <div class="testimonial-name">— Camila Rios</div>
      </div>
    </div>
  </div>

  <!-- BLOCO DESTAQUE COM IMAGEM ORIGINAL -->
  <div style="background: rgba(231, 221, 209, 0.95); margin: 2rem 1.5rem 2rem 1.5rem; padding: 2rem; border-radius: 4rem; display: flex; flex-wrap: wrap; align-items: center; justify-content: center; gap: 2rem; border: 2px solid #b78c5a70; max-width: 1000px; margin-left: auto; margin-right: auto;">
    <div style="max-width: 500px;">
      <h2 style="font-size: 1.8rem; font-weight: 600; color: #1f3133;">
        <i class="fas fa-chart-line" style="color:#b78c5a;"></i> Números que inspiram
      </h2>
      <p style="font-size: 1rem; margin-top: 0.5rem; color: #3f5355;">
        <strong>5.000+</strong> autores cadastrados · <strong>10.000+</strong> eBooks publicados · 
        <strong>50.000+</strong> leitores ativos · <strong>100% grátis</strong> para autores
      </p>
      <p style="margin-top: 1rem;"><i class="fas fa-star" style="color:#b78c5a;"></i> “Um livro é um sonho que seguramos na mão.” </p>
    </div>
    <img src="celularrr.png" style="height: 180px; width: auto;" alt="Parágrafo 42 App">
  </div>
</main>

<!-- FOOTER (mantido) -->
<footer class="footer">
  <i class="fas fa-store-alt"></i>
  <i class="fas fa-book"></i> 
  <div style="margin-top: 0.8rem; font-size: 0.9rem;">
    <a href="#"><i class="fab fa-instagram"></i></a> · 
    <a href="#"><i class="fab fa-facebook"></i></a> · 
    <a href="#"><i class="fas fa-envelope"></i></a>
  </div>
  <div style="margin-top: 1rem; font-size: 0.8rem;">
    Parágrafo 42 · Uma livraria para todos os sonhadores
  </div>
</footer>

</body>
</html>