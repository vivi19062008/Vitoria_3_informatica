<?php
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atendimento | Mundo dos Bichos</title>

    <link rel="stylesheet" href="css/atendimento.css">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

<header>

    <a href="index.php" class="logo">
        <i class="fa-solid fa-paw"></i>
        Mundo dos Bichos
    </a>

</header>

<section class="container">

    <div class="texto">

        <h1>
            <i class="fa-solid fa-headset"></i>
            Atendimento ao Cliente
        </h1>

        <p>
            Estamos prontos para cuidar de você e do seu pet.
            Tire dúvidas, envie sugestões ou relate qualquer problema.
        </p>

    </div>

    <div class="conteudo">

        <div class="informacoes">

            <div class="card">

                <i class="fa-solid fa-phone"></i>

                <h3>Telefone</h3>

                <p>(31) 3333-4444</p>

            </div>

            <div class="card">

                <i class="fa-solid fa-envelope"></i>

                <h3>E-mail</h3>

                <p>contato@mundodosbichos.com</p>

            </div>

            <div class="card">

                <i class="fa-solid fa-clock"></i>

                <h3>Horário</h3>

                <p>Segunda a Sexta<br>08h às 18h</p>

            </div>

        </div>

        <div class="formulario">

            <h2>Envie sua mensagem</h2>

            <form>

                <input type="text" placeholder="Nome Completo" required>

                <input type="email" placeholder="E-mail" required>

                <input type="text" placeholder="Assunto">

                <textarea rows="6" placeholder="Digite sua mensagem..."></textarea>

                <button type="submit">
                    <i class="fa-solid fa-paper-plane"></i>
                    Enviar Mensagem
                </button>

            </form>

        </div>

    </div>

</section>

</body>

<style>

    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family:'Segoe UI',sans-serif;
    }

    body{

        background:linear-gradient(135deg,#FAB9DA,#78dfff,#b9e39a);

    }

    header{

        background:#006c8c;

        height:80px;

        display:flex;

        align-items:center;

        padding:0 40px;

        box-shadow:0 4px 10px rgba(0,0,0,.15);

    }

    .logo{

        color:white;

        text-decoration:none;

        font-size:28px;

        font-weight:bold;

    }

    .logo i{

        color:#FAB9DA;

        margin-right:10px;

    }

    .container{

        width:1200px;

        margin:50px auto;

    }

    .texto{

        text-align:center;

        margin-bottom:40px;

    }

    .texto h1{

        color:#006c8c;

        font-size:42px;

        margin-bottom:15px;

    }

    .texto i{

        color:#ff5ca8;

    }

    .texto p{

        font-size:20px;

        color:#555;

    }

    .conteudo{

        display:flex;

        gap:40px;

    }

    .informacoes{

        width:35%;

        display:flex;

        flex-direction:column;

        gap:25px;

    }

    .card{

        background:#fff0f7;

        border:3px solid #FAB9DA;

        border-radius:20px;

        padding:30px;

        text-align:center;

        transition:.3s;

        box-shadow:0 10px 20px rgba(0,0,0,.08);

    }

    .card:hover{

        transform:translateY(-8px);

        background:white;

    }

    .card i{

        font-size:45px;

        color:#ff5ca8;

        margin-bottom:15px;

    }

    .card h3{

        color:#006c8c;

        margin-bottom:10px;

    }

    .card p{

        color:#666;

        line-height:25px;

    }

    .formulario{

        flex:1;

        background:white;

        border-radius:25px;

        padding:40px;

        border:3px solid #FAB9DA;

        box-shadow:0 12px 25px rgba(0,0,0,.10);

    }

    .formulario h2{

        color:#006c8c;

        margin-bottom:25px;

    }

    form{

        display:flex;

        flex-direction:column;

    }

    input,
    textarea{

        padding:15px;

        margin-bottom:18px;

        border:2px solid #FAB9DA;

        border-radius:12px;

        font-size:16px;

        outline:none;

        transition:.3s;

    }

    input:focus,
    textarea:focus{

        border-color:#33b6de;

        background:#fff8fc;

    }

    textarea{

        resize:none;

    }

    button{

        padding:16px;

        border:none;

        border-radius:12px;

        background:linear-gradient(90deg,#ff8ec8,#33b6de);

        color:white;

        font-size:18px;

        cursor:pointer;

        transition:.3s;

    }

    button:hover{

        transform:scale(1.02);

        background:linear-gradient(90deg,#33b6de,#006c8c);

    }

</style>

</html>
