<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Livro · Livraria Parágrafo 42</title>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../deleta.js" ></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f4ede4;
            background-image: 
                radial-gradient(circle at 10% 30%, rgba(198, 173, 140, 0.05) 2px, transparent 2px),
                radial-gradient(circle at 90% 70%, rgba(129, 104, 83, 0.05) 1px, transparent 2px);
            background-size: 40px 40px, 30px 30px;
            font-family: 'Cormorant Garamond', 'Georgia', 'Times New Roman', serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 2rem 1rem;
            margin: 0;
            position: relative;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" opacity="0.06"><path d="M70 40 L90 20 L130 20 L150 40 L150 80 L130 100 L90 100 L70 80 Z" fill="none" stroke="%2380675a" stroke-width="3"/><text x="100" y="120" font-size="26" font-family="Georgia" text-anchor="middle" fill="%2380675a" font-weight="400">📖</text></svg>');
            background-repeat: repeat;
            background-size: 130px 130px;
            pointer-events: none;
        }

        .form-card {
            background-color: #fffcf9;
            background: linear-gradient(145deg, #fffdfb 0%, #fef7f0 100%);
            width: 100%;
            max-width: 860px;
            border-radius: 8px;
            box-shadow: 
                0 12px 28px rgba(51, 35, 18, 0.12),
                0 2px 8px rgba(79, 55, 33, 0.08),
                inset 0 1px 4px rgba(255, 255, 255, 0.9);
            padding: 2.4rem 2.8rem;
            border: 1px solid #e4d6c4;
            position: relative;
            transition: box-shadow 0.2s;
        }

        .form-card:hover {
            box-shadow: 0 18px 34px rgba(64, 44, 27, 0.14);
        }

        .form-title {
            font-family: 'Playfair Display', 'Libre Baskerville', 'Times New Roman', serif;
            font-size: 2.7rem;
            font-weight: 700;
            letter-spacing: -0.5px;
            color: #2d2a24;
            margin-bottom: 0.25rem;
            border-bottom: 2px solid #cfb797;
            display: inline-block;
            padding-bottom: 0.2rem;
            text-shadow: 2px 2px 0 rgba(210, 180, 140, 0.1);
            word-spacing: 2px;
        }

        .form-subtitle {
            font-family: 'Cormorant Garamond', 'Georgia', serif;
            font-size: 1.35rem;
            font-style: italic;
            font-weight: 500;
            color: #6b4f3a;
            margin-top: 0.5rem;
            margin-bottom: 2.5rem;
            border-left: 5px solid #b69b7e;
            padding-left: 1.2rem;
            background: rgba(219, 197, 170, 0.1);
            line-height: 1.5;
            width: fit-content;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.8rem 2.2rem;
            margin-bottom: 1.8rem;
        }

        .field-group {
            display: flex;
            flex-direction: column;
            gap: 0.3rem;
            position: relative;
        }

        .field-group.full-width {
            grid-column: span 2;
        }

        label {
            font-family: 'Montserrat', 'Helvetica Neue', sans-serif;
            font-size: 0.75rem;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: #5e4b3a;
            font-weight: 600;
            margin-left: 0.2rem;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .required-star {
            color: #b3422d;
            font-size: 1.2rem;
            line-height: 1;
            margin-left: 2px;
        }

        label i {
            font-style: normal;
            font-size: 1rem;
        }

        input, select {
            font-family: 'Cormorant Garamond', 'Georgia', serif;
            font-size: 1.2rem;
            padding: 0.8rem 1.2rem;
            background-color: #fffcf8;
            border: 1px solid #dbcdbc;
            border-radius: 6px;
            color: #342a1f;
            transition: all 0.2s ease;
            box-shadow: inset 2px 2px 5px rgba(176, 147, 117, 0.02);
        }

        input:focus, select:focus {
            outline: none;
            border-color: #aa8c6f;
            background-color: #fffdfa;
            box-shadow: 0 0 0 3px rgba(188, 153, 117, 0.1), inset 0 1px 3px #e2cfbc;
        }

        input::placeholder {
            color: #b7a088;
            font-style: italic;
            font-size: 1rem;
            opacity: 0.7;
        }

        .inline-duo {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        select {
            appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="%2380675a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>');
            background-repeat: no-repeat;
            background-position: right 1.2rem center;
            background-size: 1.1rem;
            padding-right: 3rem;
        }

        select:invalid {
            color: #7a6a5c;
        }

        .submit-btn {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            letter-spacing: 2px;
            font-size: 0.95rem;
            text-transform: uppercase;
            background-color: #876b52;
            border: none;
            border-bottom: 4px solid #5d4534;
            color: white;
            padding: 1.2rem 2.5rem;
            border-radius: 40px 8px 40px 8px;
            width: 100%;
            margin-top: 2rem;
            cursor: pointer;
            transition: 0.15s;
            box-shadow: 0 6px 12px rgba(97, 68, 45, 0.2);
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 12px;
        }

        .submit-btn:hover {
            background-color: #9e8068;
            border-bottom-width: 2px;
            transform: translateY(2px);
            box-shadow: 0 4px 8px rgba(79, 55, 36, 0.2);
            border-radius: 8px 40px 8px 40px;
        }

        .submit-btn:active {
            background-color: #6f5541;
            transform: translateY(4px);
            border-bottom-width: 1px;
        }

        .divider {
            width: 100%;
            height: 1px;
            background: repeating-linear-gradient(90deg, #dcc9b2 0px, #dcc9b2 6px, transparent 6px, transparent 14px);
            margin: 1.8rem 0 1.2rem 0;
        }

        .signature {
            font-family: 'Cormorant Garamond', serif;
            font-style: italic;
            color: #ad927b;
            text-align: right;
            font-size: 0.9rem;
            margin-top: 0.6rem;
            letter-spacing: 0.3px;
        }

        .signature strong {
            font-weight: 600;
            color: #7e6551;
        }

        .error-message {
            color: #b3422d;
            font-family: 'Montserrat', sans-serif;
            font-size: 0.75rem;
            margin-top: 0.2rem;
            margin-left: 0.2rem;
            letter-spacing: 0.5px;
            display: none;
        }

        .error-message.visible {
            display: block;
        }

        input.error, select.error {
            border-color: #b3422d;
            background-color: #fff6f3;
        }

        .book-icon {
            font-size: 1.8rem;
            margin-right: 8px;
            vertical-align: middle;
        }

        @media (max-width: 650px) {
            .form-card { padding: 1.8rem; }
            .form-grid { grid-template-columns: 1fr; gap: 1.2rem; }
            .field-group.full-width { grid-column: span 1; }
            .inline-duo { grid-template-columns: 1fr; }
            .form-title { font-size: 2.2rem; }
        }

        body {
    margin: 0;
    padding: 2rem 1rem;
    font-family: 'Cormorant Garamond', 'Georgia', 'Times New Roman', serif;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    position: relative;
        }
    </style>
</head>
<body>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <input type="text" id="id_livro" hidden value="{{ $livro->id }}">
    <div class="form-card">
        <div style="display: flex; align-items: baseline; flex-wrap: wrap; justify-content: space-between;">
            <h1 class="form-title">
                <span class="book-icon"></span> Parágrafo 42
            </h1>
        </div>
        <h2 class="form-subtitle">
            ― Delete seu livro :(
        </h2>
        
        <form id="livroForm">
            <div class="form-grid">
                <div class="field-group">
                    <label for="titulo">
                        Título 
                        <span class="required-star" title="Campo obrigatório">*</span>
                    </label>
                    <input type="text" id="titulo" value={{ $livro->titulo }} name="titulo" placeholder="Ex: O Nome do Vento" required>
                    <div class="error-message" id="error-titulo">Por favor, insira o título do livro</div>
                </div>
                
                <div class="field-group">
                    <label for="autor">
                        Autor(a) 
                        <span class="required-star" title="Campo obrigatório">*</span>
                    </label>
                    <input type="text" id="autor" value={{ $livro->autor }} name="autor" placeholder="Sobrenome, Nome" required>
                    <div class="error-message" id="error-autor">Por favor, insira o nome do autor</div>
                </div>
                
                <div class="field-group">
                    <label for="ano">
                        Ano de Publicação 
                        <span class="required-star" title="Campo obrigatório">*</span>
                    </label>
                    <input type="number" id="ano_publicacao" value="{{ $livro->ano_publicacao }}" name="ano_publicacao" placeholder="ex: 2021" min="1000" max="2100" required>
                    <div class="error-message" id="error-ano">Por favor, insira o ano de publicação</div>
                </div>
                
                <div class="field-group">
                    <label for="paginas">
                        Nº de Páginas 
                        <span class="required-star" title="Campo obrigatório">*</span>
                    </label>
                    <input type="number" id="paginas" value={{ $livro->paginas }} name="paginas" placeholder="240" min="1" max="10000" required>
                    <div class="error-message" id="error-paginas">Por favor, insira o número de páginas</div>
                </div>
                
                <div class="field-group full-width">
                    <label for="editora">
                        Editora 
                        <span class="required-star" title="Campo obrigatório">*</span>
                    </label>
                    <input type="text" id="editora" value={{ $livro->editora }} name="editora" placeholder="Companhia das Letras, Alfaguara..." required>
                    <div class="error-message" id="error-editora">Por favor, insira a editora</div>
                </div>
                
                <div class="field-group full-width">
                    <label for="isbn">
                        ISBN 
                        <span class="required-star" title="Campo obrigatório">*</span>
                    </label>
                    <input type="text" id="isbn" value={{ $livro->isbn }} name="isbn" placeholder="978-3-16-148410-0" required>
                    <div class="error-message" id="error-isbn">Por favor, insira o ISBN</div>
                </div>
            </div>

            <div class="inline-duo">
                <div class="field-group">
                    <label for="preco">
                        Preço (R$) 
                        <span class="required-star" title="Campo obrigatório">*</span>
                    </label>
                    <input type="text" id="preco" value={{ $livro->preco }} name="preco" placeholder="59,90" required>
                    <div class="error-message" id="error-preco">Por favor, insira o preço</div>
                </div>


            <div class="field-group">
                    <label for="genero">
                        Gênero 
                        <span class="required-star" title="Campo obrigatório">*</span>
                    </label>
                    <select id="genero" value="{{ $livro->genero }}"  name="genero" required>
                    
                        <option value="romance">Romance</option>
                        <option value="ficcao">Ficção Científica</option>
                        <option value="fantasia">Fantasia</option>
                        <option value="biografia">Biografia</option>
                        <option value="historia">História</option>
                        <option value="poesia">Poesia</option>
                        <option value="infantil">Infantil</option>
                        <option value="autoajuda">Autoajuda</option>
                        <option value="outros">Outros</option>
                    </select>
                    <div class="error-message" id="error-genero">Por favor, selecione um gênero</div>
                </div>

            <div class="divider"></div>

        

            <button type="button" class="submit-btn" id="meuid">
                ✦ Deletar na estante ✦
            </button>
        </form>
        
        <div class="signature">
            <strong>Livraria Parágrafo 42</strong>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<style>
  .swal-card-clean {
    position: relative;
    background: #ffffff;
    border-radius: 14px;
    width: 420px;
    max-width: 90vw;
    padding: 3rem 2rem 2rem 2rem;
    box-shadow: 0 20px 40px rgba(0,0,0,0.08);
    font-family: 'Cormorant Garamond', serif;
  }

  .swal-badge-delete {
    position: absolute;
    top: -28px;
    right: -28px;
    width: 85px;
    height: 85px;
    background: #c44536;
    color: white;
    font-size: 2.8rem;
    font-weight: 600;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 10px 25px rgba(196,69,54,0.35);
    font-family: 'Montserrat', sans-serif;
  }

  .swal-content-clean h2 {
    font-size: 2rem;
    font-weight: 600;
    margin-bottom: 0.8rem;
    color: #2d2a24;
  }

  .swal-content-clean p {
    font-size: 1.2rem;
    color: #6b4f3a;
    margin-bottom: 2rem;
  }

  .swal-content-clean button {
    font-family: 'Montserrat', sans-serif;
    background: #876b52;
    color: white;
    border: none;
    padding: 0.8rem 2.2rem;
    border-radius: 8px;
    font-weight: 600;
    letter-spacing: 1px;
    cursor: pointer;
    transition: 0.2s;
  }

  .swal-content-clean button:hover {
    background: #9e8068;
  }

  .swal2-popup {
    padding: 0 !important;
    box-shadow: none !important;
    background: transparent !important;
  }
</style>

<script>
  function alertaDeletado() {
    Swal.fire({
      showConfirmButton: false,
      background: 'transparent',
      backdrop: 'rgba(45,42,36,0.35)',
      html: `
        <div class="swal-card-clean">
          <div class="swal-badge-delete">×</div>
          <div class="swal-content-clean">
            <h2>Livro removido</h2>
            <p>O livro foi excluído da estante.</p>
            <button id="swalCloseDelete">Fechar</button>
          </div>
        </div>
      `,
      didOpen: () => {
        document.getElementById("swalCloseDelete").addEventListener("click", () => Swal.close());
      }
    });
  }


  document.getElementById("meuid")?.addEventListener("click", alertaDeletado);
</script>
</body>
</html>