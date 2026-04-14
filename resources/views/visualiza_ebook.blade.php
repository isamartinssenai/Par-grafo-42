<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parágrafo 42 · Publique seu E-book</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
      background-attachment: fixed;
      color: #1e2b2c;
      line-height: 1.5;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* NAVBAR */
    .navbar {
      background: #1f3133;
      background: linear-gradient(105deg, #1a2e30 0%, #1d3537 100%);
      padding: 0.8rem 2.5rem;
      border-bottom: 3px solid #b78c5a;
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
    }

    .navbar-brand {
      font-family: 'Cormorant Garamond', 'Georgia', serif;
      font-size: 1.9rem;
      font-weight: 600;
    }

    .navbar-toggler {
      border: none;
      color: white;
    }

    .navbar-toggler i {
      font-size: 1.5rem;
      color: white;
    }

    .offcanvas {
      background: #1f3133;
    }

    .offcanvas-header {
      border-bottom: 2px solid #b78c5a;
    }

    .offcanvas-title {
      color: white;
      font-family: 'Cormorant Garamond', 'Georgia', serif;
    }

    .nav-link {
      font-family: 'Cormorant Garamond', 'Georgia', serif;
      font-size: 1rem;
      transition: 0.2s;
    }

    .nav-link:hover {
      color: #b78c5a !important;
      transform: translateX(5px);
    }

    .nav-link i {
      width: 25px;
    }

    /* CONTAINER PRINCIPAL */
    .container {
      max-width: 800px;
      margin: 2rem auto;
      padding: 0 2rem;
      flex: 1;
    }

    /* HEADER */
    .header {
      text-align: center;
      margin-bottom: 2rem;
    }

    .header h1 {
      font-size: 2.5rem;
      font-weight: 600;
      color: #1f3133;
      display: inline-block;
      background: #f0e8de;
      padding: 0.8rem 3rem;
      border-radius: 60px;
      border: 2px solid #b78c5a;
      box-shadow: 0 8px 0 #b78c5a;
      font-family: 'Cormorant Garamond', 'Georgia', serif;
    }

    .header h1 i {
      color: #b78c5a;
      margin-right: 10px;
    }

    .header p {
      margin-top: 1rem;
      color: #5f7375;
      font-size: 1.1rem;
      font-family: 'Cormorant Garamond', 'Georgia', serif;
    }

    /* FORM CARD */
    .form-card {
      background: #fffffffa;
      backdrop-filter: blur(2px);
      border-radius: 2rem;
      border: 2px solid #b78c5a70;
      overflow: hidden;
      box-shadow: 0 20px 35px -12px #1f3133;
    }

    .card-header {
      background: linear-gradient(135deg, #f0e8de, #e7ddd1);
      padding: 1.2rem 1.8rem;
      border-bottom: 3px solid #b78c5a;
    }

    .card-header h3 {
      display: flex;
      align-items: center;
      gap: 10px;
      color: #1f3133;
      font-family: 'Cormorant Garamond', 'Georgia', serif;
    }

    .card-header h3 i {
      color: #b78c5a;
    }

    .card-body {
      padding: 1.8rem;
    }

    /* FORMULÁRIO */
    .form-group {
      margin-bottom: 1.5rem;
    }

    .form-group label {
      display: flex;
      align-items: center;
      gap: 8px;
      font-weight: 600;
      font-size: 1rem;
      text-transform: uppercase;
      letter-spacing: 0.02em;
      color: #3f4e4f;
      margin-bottom: 0.5rem;
      font-family: 'Cormorant Garamond', 'Georgia', serif;
    }

    .form-group label i {
      color: #b78c5a;
    }

    input, textarea, select {
      width: 100%;
      background: #fcfaf7;
      border: 2px solid #e2dbd1;
      border-radius: 18px;
      padding: 0.85rem 1.2rem;
      font-size: 1.1rem; /* antes era 1rem */
      font-family: 'Cormorant Garamond', 'Georgia', serif;
      color: #1f2a2b;
      transition: 0.2s;
      outline: none;
    }

    input:focus, textarea:focus, select:focus {
      border-color: #b78c5a;
      box-shadow: 0 0 0 3px #b78c5a30;
    }

    /* BOTÃO PUBLICAR */
    .btn-publicar {
      background: #1f3133;
      color: white;
      border: 2px solid #b78c5a;
      padding: 0.9rem 1.8rem;
      border-radius: 50px;
      font-weight: 600;
      width: 100%;
      cursor: pointer;
      transition: 0.3s;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      font-size: 1rem;
      font-family: 'Cormorant Garamond', 'Georgia', serif;
    }

    .btn-publicar:hover {
      background: #2a4245;
      transform: scale(1.02);
    }

    /* FOOTER */
    .footer {
      background: #1f3133;
      color: #ddd2c2;
      text-align: center;
      padding: 2rem;
      border-top: 3px solid #b78c5a;
      margin-top: 3rem;
      font-family: 'Cormorant Garamond', 'Georgia', serif;
    }

    .footer i {
      color: #b78c5a;
      margin: 0 5px;
    }

    .footer a {
      color: #e6c9a8;
      text-decoration: none;
      transition: 0.2s;
    }

    .footer a:hover {
      color: #b78c5a;
    }

    /* RESPONSIVO */
    @media (max-width: 600px) {
      .navbar {
        padding: 0.8rem 1rem;
      }
      .header h1 {
        font-size: 1.8rem;
        padding: 0.5rem 1.5rem;
      }
      .card-body {
        padding: 1.2rem;
      }
      .footer {
        padding: 1.2rem;
      }
      .container {
        padding: 0 1rem;
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

<div class="container">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    <input type="hidden" id="id_ebook" value="{{$ebook->id}}">
  <div class="header">
    <h1><i class="fas fa-feather-alt"></i> Publique seu E-book</h1>
  </div>

  <!-- ÁREA DE PUBLICAÇÃO (FORMULÁRIO) -->
  <div class="form-card">
    <div class="card-header">
      <h3><i class="fas fa-edit"></i> Criar novo E-book</h3>
    </div>
    <div class="card-body">
      <div class="form-group">
        <label><i class="fas fa-book"></i> Título *</label>
        <input id="titulo" name="titulo" value="{{ $ebook->titulo}}" type="text" placeholder="Ex: As Crônicas de Nárnia">
      </div>
      <div class="form-group">
        <label><i class="fas fa-user"></i> Autor(a) *</label>
        <input id="autor" name="autor" value="{{ $ebook->autor}}" type="text" placeholder="Seu nome">
      </div>
      <div class="form-group">
        <label><i class="fas fa-tag"></i> Gênero</label>
        <select id="genero" name="genero"> <!-- ✅ CORRIGIDO: ID "genero" -->
          <option value="fantasia" {{$ebook->genero == 'fantasia' ? 'selected' : '' }}>Fantasia</option>
          <option value="ficcao" {{$ebook->genero == 'ficcao' ? 'selected' : '' }}>Ficção Científica</option>
          <option value="biografia" {{$ebook->genero == 'biografia' ? 'selected' : '' }}>Biografia</option>
          <option value="romance" {{$ebook->genero == 'romance' ? 'selected' : '' }}>Romance</option>
          <option value="terror" {{$ebook->genero == 'terror' ? 'selected' : '' }}>Terror</option>
          <option value="poesia" {{$ebook->genero == 'poesia' ? 'selected' : '' }}>Poesia</option>
          <option value="infantil" {{$ebook->genero == 'infantil' ? 'selected' : '' }}>Infantil</option>
          <option value="hisrotia" {{$ebook->genero == 'historia' ? 'selected' : ''}}>História</option>
          <option value="" {{$ebook->genero == 'aventura' ? 'selected' : ''}}>Aventura</option>
          <option value="outro" {{$ebook->genero == 'outro' ? 'selected' : ''}}>Outro</option>
        </select>
      </div>
      <div class="form-group">
  <label><i class="fas fa-align-left"></i> Sinopse</label>
  <textarea rows="2" id="sinopse" name="sinopse" placeholder="Breve descrição...">{{ $ebook->sinopse }}</textarea>
</div>

<div class="form-group">
  <label><i class="fas fa-paragraph"></i> Conteúdo completo *</label>
  <textarea rows="6" id="texto" name="texto" placeholder="Digite aqui o conteúdo do seu e-book...">{{ $ebook->texto }}</textarea>
</div>
      <button type="submit" id="meuid" class="btn-publicar">
        <i class="fas fa-cloud-upload-alt"></i> Alterar E-book
      </button>
    </div>
  </div>
</div>

<!-- FOOTER -->
<footer class="footer">
  <i class="fas fa-feather-alt"></i> Parágrafo 42 · Compartilhe conhecimento através de e-books
  <div style="margin-top: 0.8rem; font-size: 0.9rem;">
    <a href="#"><i class="fab fa-instagram"></i></a>
    <span style="margin: 0 0.5rem;">·</span>
    <a href="#"><i class="fab fa-facebook"></i></a>
    <span style="margin: 0 0.5rem;">·</span>
    <a href="#"><i class="fas fa-envelope"></i></a>
  </div>
  <div style="margin-top: 0.8rem; font-size: 0.8rem;">
    &copy; 2026 Parágrafo 42 · Todos os direitos reservados
  </div>
</footer>

<script>
  $(document).ready(function(){

    $("#meuid").click(function(){

        let token = $.cookie('token');

        console.log(token);

        $.ajax({
            url: "/api/altera_ebook",
            method: "PUT",
            headers: {
                'Authorization': 'Bearer ' + token
            },
            data: { 
                id_ebook:$("#id_ebook").val(),
                titulo: $("#titulo").val(),
                autor: $("#autor").val(),
                genero: $("#genero").val(),
                sinopse: $("#sinopse").val(),
                texto: $("#texto").val()
            },
            success: function (res){
                console.log(res);
                if(res['erro'] == 'n'){
                    alert("Perfil Alterado");
                }else{
                    alert("Erro ao Alterar");
                }
            },
            error: function (xhr) {
                console.log(xhr.responseText);
            }
        });

    });

});
</script>

</body>
</html>