<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Autenticação Dupla</title>

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body style="
    margin:0;
    padding:30px 15px;
    background:#f4f1ea;
    font-family:'Inter', sans-serif;
">

    <div style="
        max-width:620px;
        margin:auto;
        background:#ffffff;
        border-radius:28px;
        overflow:hidden;
        border:1px solid #e6dccd;
        box-shadow:0 15px 35px rgba(0,0,0,0.08);
    ">

        <!-- TOPO -->
        <div style="
            height:8px;
            background:linear-gradient(
                90deg,
                #b78c5a,
                #e6c9a8,
                #b78c5a
            );
        "></div>

        <!-- CONTEÚDO -->
        <div style="padding:45px 40px;">

            <!-- ÍCONE -->
            <div style="text-align:center; margin-bottom:30px;">

                <div style="
                    width:85px;
                    height:85px;
                    margin:0 auto 18px auto;
                    border-radius:50%;
                    background:#f3eadf;
                    border:2px solid #b78c5a;
                    text-align:center;
                    line-height:85px;
                    font-size:38px;
                    color:#b78c5a;
                ">
                    ✉
                </div>

                <h1 style="
                    margin:0;
                    font-size:38px;
                    font-weight:600;
                    color:#1f3133;
                    font-family:'Cormorant Garamond', serif;
                    letter-spacing:1px;
                ">
                    Parágrafo 42
                </h1>

                <p style="
                    margin-top:10px;
                    color:#7a8a8c;
                    font-size:16px;
                ">
                    Autenticação de acesso
                </p>

            </div>

            <!-- LINHA -->
            <div style="
                width:70px;
                height:2px;
                background:#d6d1c4;
                margin:0 auto 35px auto;
            "></div>

            <!-- TÍTULO -->
            <h2 style="
                margin:0 0 18px 0;
                color:#1f3133;
                font-size:30px;
                font-weight:600;
                text-align:center;
                font-family:'Cormorant Garamond', serif;
            ">
                Seu código de autenticação
            </h2>

            <!-- TEXTO -->
            <p style="
                font-size:17px;
                color:#555;
                line-height:1.8;
                margin-bottom:35px;
                text-align:center;
            ">
                Utilize o código abaixo para concluir seu acesso na plataforma.
            </p>

            <!-- CÓDIGO -->
            <div style="
                background:#fcfaf7;
                border:2px dashed #b78c5a;
                border-radius:24px;
                padding:28px 20px;
                text-align:center;
                margin-bottom:35px;
            ">

                <p style="
                    margin:0 0 10px 0;
                    color:#7b6a56;
                    font-size:14px;
                    letter-spacing:2px;
                    text-transform:uppercase;
                    font-weight:600;
                ">
                    Código de autenticação
                </p>

                <div style="
                    font-size:42px;
                    letter-spacing:12px;
                    color:#1f3133;
                    font-weight:700;
                ">
                    {{ $codigo }}
                </div>

            </div>

            <!-- ALERTA -->
            <div style="
                background:#f8f3eb;
                border-left:4px solid #b78c5a;
                padding:18px;
                border-radius:14px;
                margin-bottom:30px;
            ">

                <p style="
                    margin:0;
                    color:#5c5c5c;
                    line-height:1.7;
                    font-size:15px;
                ">
                    Este código é válido por <strong>10 minutos</strong>.
                    Caso você não tenha solicitado este acesso,
                    ignore este e-mail.
                </p>

            </div>

            <!-- RODAPÉ -->
            <div style="
                border-top:1px solid #eee4d6;
                padding-top:25px;
                text-align:center;
            ">

                <p style="
                    margin:0 0 10px 0;
                    font-size:15px;
                    color:#7a8a8c;
                ">
                    Obrigado por utilizar a Parágrafo 42 📚
                </p>

                <p style="
                    margin:0;
                    font-size:13px;
                    color:#999;
                ">
                    © {{ date('Y') }} Parágrafo 42
                </p>

            </div>

        </div>

    </div>

</body>
</html>