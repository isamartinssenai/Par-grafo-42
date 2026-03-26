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
  
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
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
      grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
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
    }
  </style>
</head>
<body>
  <!-- NAVBAR (igual à da estante) -->
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

  
  <main>
    <section class="pre-venda-section">
      <div class="pre-venda-titulo">
        <h2><i class="fas fa-clock"></i> Lançamentos em Pré-venda</h2>
        <div class="pre-venda-subtitulo">
         
        </div>
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

      

      <div class="pre-venda-grid">
        <!-- Livro 1 -->
        <div class="livro-pre-card">
          <span class="badge-pre">PRÉ-VENDA</span>
          <div class="livro-pre-capa">
            <img src="cidade.jpg" alt="A Cidade dos Etéreos" onerror="this.style.display='none'; this.parentElement.innerHTML='<i class=\'fas fa-book\' style=\'font-size:5rem;color:#1f3133;\'></i>'">
          </div>
          <div class="livro-pre-info">
            <div class="livro-pre-titulo">A Cidade dos Etéreos</div>
            <div class="livro-pre-autor">R.F. Kuang</div>
            <div class="livro-pre-preco">
              R$ 59,90 <small>R$ 79,90</small>
            </div>
            <button class="btn-pre-small" onclick="reservarLivro('A Cidade dos Etéreos')">
              <i class="fas fa-clock"></i> Reservar
            </button>
          </div>
        </div>

        <!-- Livro 2 -->
        <div class="livro-pre-card">
          <span class="badge-pre">PRÉ-VENDA</span>
          <div class="livro-pre-capa">
            <img src="vermeio.jpg" alt="Vermelho, Branco e Sangue Azul" onerror="this.style.display='none'; this.parentElement.innerHTML='<i class=\'fas fa-book-open\' style=\'font-size:5rem;color:#1f3133;\'></i>'">
          </div>
          <div class="livro-pre-info">
            <div class="livro-pre-titulo">Vermelho, Branco e Sangue Azul</div>
            <div class="livro-pre-autor">Casey McQuiston</div>
            <div class="livro-pre-preco">
              R$ 49,90 <small>R$ 64,90</small>
            </div>
            <button class="btn-pre-small" onclick="reservarLivro('Vermelho, Branco e Sangue Azul')">
              <i class="fas fa-clock"></i> Reservar
            </button>
          </div>
        </div>

        <!-- Livro 3 -->
        <div class="livro-pre-card">
          <span class="badge-pre">PRÉ-VENDA</span>
          <div class="livro-pre-capa">
            <img src="rio.jpg" alt="Tudo é Rio" onerror="this.style.display='none'; this.parentElement.innerHTML='<i class=\'fas fa-book\' style=\'font-size:5rem;color:#1f3133;\'></i>'">
          </div>
          <div class="livro-pre-info">
            <div class="livro-pre-titulo">Tudo é Rio</div>
            <div class="livro-pre-autor">Carla Madeira</div>
            <div class="livro-pre-preco">
              R$ 54,90 <small>R$ 69,90</small>
            </div>
            <button class="btn-pre-small" onclick="reservarLivro('Tudo é Rio')">
              <i class="fas fa-clock"></i> Reservar
            </button>
          </div>
        </div>

        <!-- Livro 4 -->
        <div class="livro-pre-card">
          <span class="badge-pre">PRÉ-VENDA</span>
          <div class="livro-pre-capa">
            <img src="problema.jpg" alt="O Problema dos Três Corpos" onerror="this.style.display='none'; this.parentElement.innerHTML='<i class=\'fas fa-book-open\' style=\'font-size:5rem;color:#1f3133;\'></i>'">
          </div>
          <div class="livro-pre-info">
            <div class="livro-pre-titulo">O Problema dos Três Corpos</div>
            <div class="livro-pre-autor">Cixin Liu</div>
            <div class="livro-pre-preco">
              R$ 74,90 <small>R$ 99,90</small>
            </div>
            <button class="btn-pre-small" onclick="reservarLivro('O Problema dos Três Corpos')">
              <i class="fas fa-clock"></i> Reservar
            </button>
          </div>
        </div>
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

      <!-- NEWSLETTER -->
      <div class="newsletter">
        <h3><i class="fas fa-envelope-open-text"></i> Quer saber dos lançamentos primeiro?</h3>
        <p>Cadastre-se e receba novidades e ofertas exclusivas de pré-venda</p>
        <div class="newsletter-input">
          <input type="email" id="newsletterEmail" placeholder=" E-mail" value="">
          <button onclick="inscreverNewsletter()">Inscrever</button>
        </div>
      </div>

     
 

  <!-- Scripts do Sweet Alert -->
  <script>
    // Função para o botão principal de pré-venda
    function confirmarPreVenda() {
      Swal.fire({
        title: '📚 Pré-venda garantida!',
        html: `
          <div style="text-align: center;">
            <i class="fas fa-check-circle" style="color: #b78c5a; font-size: 3rem; margin-bottom: 1rem;"></i>
            <p style="font-size: 1.1rem; margin-bottom: 0.5rem;"><strong>O Nome do Vento</strong></p>
            <p style="color: #5f7375;">Patrick Rothfuss</p>
            <p style="margin-top: 1rem; padding: 0.5rem; background: #f0e8de; border-radius: 50px;">
              <i class="fas fa-clock" style="color: #b78c5a;"></i> Chega em até 15 dias
            </p>
          </div>
        `,
        icon: 'success',
        background: '#fcfaf7',
        color: '#1f3133',
        confirmButtonColor: '#b78c5a',

      });
    }

    // Função para os botões de reservar dos cards
    function reservarLivro(titulo) {
      Swal.fire({
        title: '📖 Reserva realizada!',
        text: `"${titulo}" foi adicionado à sua pré-venda.`,
        icon: 'success',
        background: '#fcfaf7',
        color: '#1f3133',
        confirmButtonColor: '#b78c5a',
        confirmButtonText: 'OK',
        timer: 3000,
        timerProgressBar: true
      });
    }

    // Função para newsletter
    function inscreverNewsletter() {
      const email = document.getElementById('newsletterEmail').value;
      Swal.fire({
        title: '✉️ Inscrição confirmada!',
        html: `
          <p>Enviaremos novidades para:</p>
          <p style="font-weight: bold; color: #b78c5a;">${email}</p>
        `,
        icon: 'success',
        background: '#fcfaf7',
        color: '#1f3133',
        confirmButtonColor: '#b78c5a',
        timer: 4000,
        timerProgressBar: true
      });
    }

    // Função para ver mais lançamentos
    function verMaisLancamentos() {
      Swal.fire({
        title: '🔍 Carregando...',
        text: 'Buscando mais lançamentos para você',
        icon: 'info',
        background: '#fcfaf7',
        color: '#1f3133',
        confirmButtonColor: '#b78c5a',
        confirmButtonText: 'OK',
        timer: 2000,
        timerProgressBar: true,
        showConfirmButton: false
      }).then(() => {
        Swal.fire({
          title: '📚 Todos os lançamentos',
          text: 'Você será redirecionado para a página completa de lançamentos (demo)',
          icon: 'info',
          background: '#fcfaf7',
          color: '#1f3133',
          confirmButtonColor: '#b78c5a'
        });
      });
    }
  </script>
</body>
</html>