<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parágrafo 42 · alterar autor</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
<style>
.submit-btn {
  background: linear-gradient(145deg, #1f3133, #2a4245);
  color: #fff;
  border: none;
  font-weight: 600;
  padding: 1rem 2.5rem;
  border-radius: 50px;
  font-size: 1.1rem;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 12px;
  cursor: pointer;
  transition: all 0.3s ease;
  border: 2px solid #b78c5a;
  text-decoration: none;
  font-family: 'Cormorant Garamond', serif;
  text-transform: uppercase;
  letter-spacing: 1px;
  position: relative;
  overflow: hidden;
  box-shadow: 0 8px 18px -6px #1f3133;
}

.submit-btn::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(183, 140, 90, 0.3), transparent);
  transition: left 0.5s ease;
}

.submit-btn:hover {
  background: linear-gradient(145deg, #2a4245, #1f3133);
  transform: translateY(-3px) scale(1.02);
  box-shadow: 0 15px 25px -8px #1f3133, 0 0 0 2px #e6c9a8;
  border-color: #e6c9a8;
  color: #fff;
}

.submit-btn:hover::before {
  left: 100%;
}

.submit-btn:active {
  transform: translateY(-1px) scale(0.99);
  box-shadow: 0 5px 12px -4px #1f3133;
}

.submit-btn i {
  color: #b78c5a;
  font-size: 1.2rem;
  transition: all 0.3s ease;
}

.submit-btn:hover i {
  color: #e6c9a8;
  transform: scale(1.1) rotate(-5deg);
}

.submit-btn i:first-child {
  animation: subtlePulse 2s ease-in-out infinite;
}

/* Animação sutil para o ícone */
@keyframes subtlePulse {
  0%, 100% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.05);
  }
}

/* Estilo adicional para quando o botão estiver carregando (opcional) */
.submit-btn.loading {
  pointer-events: none;
  opacity: 0.8;
  padding-left: 2rem;
  padding-right: 2rem;
}

.submit-btn.loading i {
  animation: spin 1s linear infinite;
}

@keyframes spin {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

/* Responsividade */
@media (max-width: 768px) {
  .submit-btn {
    padding: 0.9rem 2rem;
    font-size: 1rem;
    width: 100%;
    max-width: 300px;
  }
}
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html, body {
      height: 100%;
    }

    body {
      padding-top: 80px;
      font-family: 'Cormorant Garamond', 'Georgia', serif;
      background-image: url('naice.png');
      background-size: cover;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
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
      flex-wrap: wrap;
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

    /* Responsividade para a navbar */
    @media (max-width: 900px) {
      .navbar {
        flex-direction: column;
        gap: 0.8rem;
        padding: 1rem;
      }
      .nav-links {
        justify-content: center;
        gap: 0.8rem;
      }
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
  <!-- CONTEÚDO PRINCIPAL - CADASTRO DE AUTOR -->
  <div class="cadastro-container">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    <input type="hidden" id="id_autor" value="{{$autor->id}}">
    
    <div class="cadastro-card">
      
      <!-- CABEÇALHO -->
      <div class="cadastro-header">
        <div class="cadastro-avatar">
          <div class="avatar-circle">
            <i class="fas fa-feather-alt"></i>
          </div>
        </div>
        <div class="cadastro-titulo">
          <h1>
            <i class="fas fa-id-card"></i>
            Altera Autor
          </h1>
          <p>Preencha os dados do autor</p>
        </div>
      </div>

      <!-- FORMULÁRIO -->
      <div id="form-autor">
        <div class="form-grid">
          <!-- Nome Completo -->
          <div class="form-group full-width">
            <span class="form-label"><i class="fas fa-user"></i> Nome completo *</span>
            <input 
              id="nome" 
              name="nome" 
              value="{{ $autor->nome}}"
              type="text" 
              class="form-control" 
              placeholder="Digite o nome completo" 
            >
          </div>

          <!-- Telefone -->
          <div class="form-group">
            <span class="form-label"><i class="fas fa-phone"></i> Telefone *</span>
            <input 
              id="telefone" 
              name="telefone" 
              value="{{ $autor->telefone}}"
              type="text" 
              class="form-control" 
              placeholder="(00) 00000-0000" 
            >
          </div>

          <!-- CPF -->
          <div class="form-group">
            <span class="form-label"><i class="fas fa-id-card"></i> CPF *</span>
            <input 
              id="cpf" 
              name="cpf" 
              value="{{ $autor->cpf}}"
              type="text" 
              class="form-control" 
              placeholder="000.000.000-00" 
            >
          </div>

          <!-- Data de Nascimento -->
          <div class="form-group">
            <span class="form-label"><i class="fas fa-calendar-alt"></i> Data de nascimento *</span>
            <input 
              id="nascimento" 
              name="nascimento" 
              value="{{ $autor->nascimento}}"
              type="date" 
              class="form-control" 
            >
          </div>

          <!-- Gênero Literário -->
          <div class="form-group">
            <span class="form-label"><i class="fas fa-book"></i> Gênero literário *</span>
            <select id="genero" name="genero" class="form-control" required>
              <option value="romance" {{$autor->genero == 'romance' ? 'selected' : '' }}>Romance</option>
              <option value="ficcao" {{$autor->genero == 'ficcao' ? 'selected' : '' }}>Ficção Científica</option>
              <option value="fantasia" {{$autor->genero == 'fantasia' ? 'selected' : '' }}>Fantasia</option>
              <option value="terror" {{$autor->genero == 'terror' ? 'selected' : '' }}>Terror</option>
              <option value="suspense" {{ $autor->genero == 'suspense' ? 'selected' : '' }}>Suspense</option>
              <option value="poesia" {{$autor->genero == 'poesia' ? 'selected' : '' }}>Poesia</option>
              <option value="biografia" {{$autor->genero == 'biografia' ? 'selected' : '' }}>Biografia</option>
              <option value="infantil" {{$autor->genero == 'infantil' ? 'selected' : '' }}>Infantil</option>
            </select>
          </div>
        </div>

        <!-- BOTÕES -->
        <div class="acoes-form">
          <button type="button" class="submit-btn" id="meuid">
            <i class="fas fa-save"></i> Alterar Autor
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
    // Função para aplicar máscara de telefone
    function mascaraTelefone(valor) {
      let value = valor.replace(/\D/g, '');
      if (value.length > 11) value = value.slice(0, 11);
      
      if (value.length > 10) {
        value = value.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
      } else if (value.length > 6) {
        value = value.replace(/(\d{2})(\d{4})(\d{0,4})/, '($1) $2-$3');
      } else if (value.length > 2) {
        value = value.replace(/(\d{2})(\d{0,5})/, '($1) $2');
      } else if (value.length > 0) {
        value = value.replace(/(\d{0,2})/, '($1');
      }
      return value;
    }

    // Função para aplicar máscara de CPF
    function mascaraCPF(valor) {
      let value = valor.replace(/\D/g, '');
      if (value.length > 11) value = value.slice(0, 11);
      
      if (value.length > 9) {
        value = value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
      } else if (value.length > 6) {
        value = value.replace(/(\d{3})(\d{3})(\d{0,3})/, '$1.$2.$3');
      } else if (value.length > 3) {
        value = value.replace(/(\d{3})(\d{0,3})/, '$1.$2');
      }
      return value;
    }

    // Inicialização quando a página carrega
    document.addEventListener('DOMContentLoaded', function() {
      const telefoneInput = document.getElementById('telefone');
      const cpfInput = document.getElementById('cpf');
      
      // Aplicar máscaras nos valores iniciais
      if (telefoneInput.value) {
        telefoneInput.value = mascaraTelefone(telefoneInput.value);
      }
      
      if (cpfInput.value) {
        cpfInput.value = mascaraCPF(cpfInput.value);
      }
      
      // Event listeners para máscaras
      telefoneInput.addEventListener('input', function(e) {
        e.target.value = mascaraTelefone(e.target.value);
      });

      cpfInput.addEventListener('input', function(e) {
        e.target.value = mascaraCPF(e.target.value);
      });
    });

    $(document).ready(function(){

       
       $("#meuid").click(function(){

        let token = $.cookie('token');
        
        // Mostrar loading
        Swal.fire({
          title: 'Processando...',
          text: 'Alterando os dados do autor',
          allowOutsideClick: false,
          allowEscapeKey: false,
          background: '#fffffffa',
          didOpen: () => {
            Swal.showLoading();
          }
        });
        
        $.ajax({
            url: "/api/altera_autor",
            method: "PUT",
            data: { 
                id_autor:$("#id_autor").val(),
                nome: $("#nome").val(),
                cpf: $("#cpf").val(),
                telefone: $("#telefone").val(),
                nascimento: $("#nascimento").val(),
                genero: $("#genero").val(),
                token:token
            }, success: function (res){
                console.log(res);
                if(res['erro'] == 'n'){
                    // Sweet Alert de sucesso
                    Swal.fire({
                        icon: 'success',
                        title: 'Sucesso!',
                        html: `
                            <div style="text-align: center; font-family: 'Cormorant Garamond', serif;">
                                <i class="fas fa-check-circle" style="color: #b78c5a; font-size: 3rem; margin-bottom: 1rem;"></i>
                                <p style="font-size: 1.2rem; color: #1f3133;">Perfil do autor alterado com sucesso!</p>
                            </div>
                        `,
                        background: '#fffffffa',
                        showConfirmButton: true,
                        confirmButtonColor: '#b78c5a',
                        confirmButtonText: 'OK',
                        timer: 3000,
                        timerProgressBar: true,
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        }
                    }).then(() => {
                        window.location.href = "/autor";
                    });
                } else {
                    // Sweet Alert de erro
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        html: `
                            <div style="text-align: center; font-family: 'Cormorant Garamond', serif;">
                                <i class="fas fa-exclamation-triangle" style="color: #b78c5a; font-size: 3rem; margin-bottom: 1rem;"></i>
                                <p style="font-size: 1.2rem; color: #1f3133;">Erro ao alterar o perfil!</p>
                                <p style="font-size: 1rem; color: #666;">Tente novamente mais tarde.</p>
                            </div>
                        `,
                        background: '#fffffffa',
                        confirmButtonColor: '#b78c5a',
                        confirmButtonText: 'OK'
                    });
                }

            },
            error: function (xhr) {
                console.log("Erro ao consultar status Pix:", xhr.responseText);
                Swal.fire({
                    icon: 'error',
                    title: 'Erro no servidor',
                    html: `
                        <div style="text-align: center; font-family: 'Cormorant Garamond', serif;">
                            <i class="fas fa-exclamation-circle" style="color: #b78c5a; font-size: 3rem; margin-bottom: 1rem;"></i>
                            <p style="font-size: 1.2rem; color: #1f3133;">Erro ao conectar ao servidor</p>
                            <p style="font-size: 1rem; color: #666;">Verifique sua conexão e tente novamente.</p>
                        </div>
                    `,
                    background: '#fffffffa',
                    confirmButtonColor: '#b78c5a',
                    confirmButtonText: 'OK'
                });
            }
        });
    });
});

  </script>
</body>
</html>