<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="autenticacao_dupla.js"></script>
    <title>Parágrafo 42 · Verificação</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            min-height:100vh;
            display:flex;
            flex-direction:column;
            font-family:'Inter', sans-serif;
            background-image:url('chat.png');
            background-size:cover;
            background-position:center;
            background-attachment:fixed;
            color:#1f3133;
        }

        .verify-container{
            flex:1;
            display:flex;
            justify-content:center;
            align-items:center;
            padding:2rem;
        }

        .verify-card{
            width:100%;
            max-width:540px;
            background:#fffffffa;
            border-radius:3rem;
            padding:3rem 2.5rem;
            position:relative;
            overflow:hidden;
            border:2px solid #b78c5a70;

            box-shadow:
            0 25px 40px -15px #1f3133,
            0 10px 20px -8px rgba(0,0,0,0.2);
        }

        .verify-card::before{
            content:'';
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:8px;

            background:linear-gradient(
                90deg,
                #b78c5a,
                #e6c9a8,
                #b78c5a
            );
        }

        .verify-header{
            text-align:center;
            margin-bottom:2.5rem;
        }

        .verify-icon{
            width:90px;
            height:90px;
            margin:0 auto 1.2rem;

            border-radius:50%;
            background:#f0e8de;

            display:flex;
            align-items:center;
            justify-content:center;

            border:2px solid #b78c5a;

            color:#b78c5a;
            font-size:2.5rem;
        }

        .verify-header h1{
            font-size:2rem;
            margin-bottom:0.8rem;
            color:#1f3133;
        }

        .verify-header p{
            color:#5f7375;
            font-size:1rem;
            line-height:1.6;
        }

        .input-group{
            display:flex;
            flex-direction:column;
            gap:0.7rem;
            margin-bottom:2rem;
        }

        .input-group label{
            font-size:0.95rem;
            font-weight:600;
            color:#3e5052;

            display:flex;
            align-items:center;
            gap:8px;
        }

        .input-group label i{
            color:#b78c5a;
        }

        .email-wrapper{
            position:relative;
            display:flex;
            align-items:center;
        }

        .email-icon{
            position:absolute;
            left:1.2rem;
            color:#b78c5a;
            font-size:1rem;
        }

        .email-input{
            width:100%;
            height:65px;

            border-radius:22px;
            border:2px solid #d8d0c4;

            background:#fcfaf7;

            padding:0 1.2rem 0 3rem;

            font-size:1rem;
            color:#1f3133;

            outline:none;
            transition:0.2s;
        }

        .email-input:focus{
            border-color:#b78c5a;
            box-shadow:0 0 0 4px #b78c5a30;
            background:#fff;
        }

        .code-container{
            display:flex;
            gap:0.8rem;
            justify-content:center;
            flex-wrap:wrap;
        }

        .code-input{
            width:60px;
            height:70px;

            border-radius:20px;
            border:2px solid #d8d0c4;

            background:#fcfaf7;

            text-align:center;

            font-size:1.8rem;
            font-weight:700;
            color:#1f3133;

            outline:none;
            transition:0.2s;
        }

        .code-input:focus{
            border-color:#b78c5a;
            box-shadow:0 0 0 4px #b78c5a30;
            transform:translateY(-2px);
        }

        .verify-btn{
            width:100%;

            border:none;
            background:#1f3133;

            color:white;

            padding:1rem;
            border-radius:60px;

            font-size:1.1rem;
            font-weight:600;

            cursor:pointer;

            display:flex;
            align-items:center;
            justify-content:center;
            gap:12px;

            transition:0.3s;

            border:2px solid #b78c5a;
        }

        .verify-btn:hover{
            background:#2b4446;
            transform:scale(1.02);
            gap:18px;
        }

        .verify-btn i{
            color:#e6c9a8;
        }

        .resend-section{
            text-align:center;
            margin-top:2rem;
        }

        .resend-section p{
            color:#607274;
            margin-bottom:1rem;
        }

        .resend-btn{
            background:none;
            border:none;

            color:#b78c5a;

            font-size:1rem;
            font-weight:600;

            cursor:pointer;
            transition:0.2s;
        }

        .resend-btn:hover{
            color:#1f3133;
        }

        .timer{
            margin-top:0.8rem;
            color:#88999b;
            font-size:0.95rem;
        }

        .book-decoration{
            display:flex;
            justify-content:center;
            gap:1rem;

            margin-top:2rem;

            color:#b78c5a80;
        }

        .book-decoration i{
            width:40px;
            height:40px;

            background:#f0e8de;

            border-radius:50%;

            display:flex;
            align-items:center;
            justify-content:center;

            border:1px solid #b78c5a;
        }

        .footer{
            background:#1f3133;
            color:#ddd2c2;

            text-align:center;

            padding:1.5rem;

            border-top:3px solid #b78c5a;
        }

        .footer i{
            color:#b78c5a;
            margin:0 5px;
        }

        @media(max-width:600px){

            .verify-card{
                padding:2rem 1.5rem;
                border-radius:2rem;
            }

            .code-input{
                width:50px;
                height:60px;
                font-size:1.5rem;
            }

            .verify-header h1{
                font-size:1.7rem;
            }

        }

    </style>

</head>

<body>

    <div class="verify-container">

        <div class="verify-card">

            <div class="verify-header">

                <div class="verify-icon">
                    <i class="fas fa-envelope-open-text"></i>
                </div>

                <h1>Verificação de Código</h1>

                <p>
                    Digite seu e-mail e o código enviado
                    para confirmar o acesso.
                </p>

            </div>

            <!-- EMAIL -->
<div class="input-group">

    <label>
        <i class="fas fa-envelope"></i>
        Seu e-mail
    </label>

    <div class="email-wrapper">

        <i class="fas fa-at email-icon"></i>

        <input
            type="text"
            id="email"
            name="email"
            class="email-input"
            placeholder="Email"
        >

    </div>

</div>

<!-- CÓDIGO -->
<div class="input-group">

    <label>
        <i class="fas fa-shield-alt"></i>
        Código de autenticação
    </label>

    <div class="email-wrapper">

        <i class="fas fa-key email-icon"></i>

        <input
            type="text"
            id="codigo"
            name="codigo"
            class="email-input"
            placeholder="Código de autenticação"
        >

    </div>

</div>

<!-- BOTÃO -->
<button
    class="verify-btn"
    id="enviar_codigo"
>

    <i class="fas fa-check-circle"></i>

    Enviar

</button>
           

            <!-- DECORAÇÃO -->
            <div class="book-decoration">

                <i class="fas fa-book"></i>

                <i class="fas fa-book-open"></i>

                <i class="fas fa-book"></i>

            </div>

        </div>

    </div>

    <!-- FOOTER -->
    <footer class="footer">

        <i class="fas fa-store-alt"></i>

        Parágrafo 42 ·

        <i class="fas fa-book"></i>

        #42 ·

        Leitores bem-vindos

    </footer>

    

</body>
</html>