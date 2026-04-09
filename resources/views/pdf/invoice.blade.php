<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>E-book</title>

<style>
    body {
        font-family: Georgia, serif;
        margin: 70px;
        font-size: 24px;
        color: #1f2a2b;
        line-height: 1.8;
    }

    /* NUMERO DA PAGINA */
    @page {
        margin: 70px;
    }

    .page-number:after {
        content: counter(page);
    }

    .rodape {
        position: fixed;
        bottom: 20px;
        left: 0;
        right: 0;
        text-align: center;
        font-size: 14px;
        color: #888;
    }

    /* CAPA */
    .capa {
        text-align: center;
        margin-top: 200px;
    }

    .titulo {
        font-size: 56px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .autor {
        font-size: 28px;
        color: #555;
    }

    .genero {
        margin-top: 15px;
        font-size: 22px;
        color: #999;
    }

    /* LINHA BONITA */
    .linha {
        width: 120px;
        height: 4px;
        background: #b78c5a;
        margin: 30px auto;
    }

    /* QUEBRA */
    .quebra {
        page-break-after: always;
    }

    /* SEÇÕES */
    .secao {
        margin-top: 40px;
    }

    .secao h2 {
        font-size: 34px;
        border-bottom: 3px solid #b78c5a;
        padding-bottom: 10px;
        margin-bottom: 25px;
    }

    .texto {
        font-size: 22px;
        text-align: justify;
    }

</style>
</head>

<body>

<!-- CAPA -->
<div class="capa">
    <div class="titulo">{{ $ebook->titulo }}</div>
    <div class="linha"></div>
    <div class="autor">Por {{ $ebook->autor }}</div>
    <div class="genero">{{ $ebook->genero }}</div>
</div>

<div class="quebra"></div>

<!-- SINOPSE -->
<div class="secao">
    <h2>Sinopse</h2>
    <div class="texto">
        {!! nl2br($ebook->sinopse) !!}
    </div>
</div>

<div class="quebra"></div>

<!-- CONTEÚDO -->
<div class="secao">
    <h2>História</h2>
    <div class="texto">
        {!! nl2br($ebook->texto) !!}
    </div>
</div>

<!-- RODAPÉ -->
<div class="rodape">
    Página <span class="page-number"></span> · Parágrafo 42
</div>

</body>
</html>