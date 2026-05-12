<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body style="margin:0; padding:0; background:#f4f1ea; font-family:'Cormorant Garamond', serif;">

<div style="max-width:600px; margin:40px auto; background:#ffffff; border-radius:16px; padding:40px;">

    //Título
    <div style="text-align:center; margin-bottom:25px;">
        <h1 style="margin:0; font-size:34px; font-weight:600; color:#2c2c2c; letter-spacing:1px;">
            Parágrafo 42
        </h1>
    </div>

    // Linha
    <div style="width:60px; height:2px; background:#d6d1c4; margin:0 auto 25px auto;"></div>

    // Conteúdo
    <h2 style="font-size:26px; font-weight:500; color:#2c2c2c; margin-bottom:15px;">
        Bem-vindo(a), {{$usuario->nome}}!
    </h2>

    <p style="font-size:17px; color:#555; line-height:1.7; margin-bottom:15px;">
        Seu cadastro foi realizado com sucesso na plataforma.
    </p>

    <p style="font-size:17px; color:#555; line-height:1.7;">
        Agora você pode explorar ebooks, salvar favoritos e acompanhar sua leitura.
    </p>

    // Rodapé
    <div style="border-top:1px solid #f8e8bd; padding-top:20px; text-align:center;">
        <p style="font-size:13px; color:#999;">
            © {{ date('Y') }} Parágrafo 42
        </p>
    </div>

</div>


</body>
</html>
