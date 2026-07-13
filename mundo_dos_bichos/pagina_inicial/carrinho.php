<?php
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho | Mundo dos Bichos</title>

    <link rel="stylesheet" href="css/carrinho.css">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<header>

    <div class="header-left"></div>

    <div class="logo-container">
        <img src="img/logo.png" alt="Logo Mundo Dos Bichos">
    </div>

    <div class="header-icons">

        <a href="cadastro.php" title="Cadastro">
            <i class="fa-solid fa-user"></i>
        </a>

        <a href="carrinho.php" title="Carrinho">
            <i class="fa-solid fa-cart-shopping"></i>
        </a>

    </div>

</header>

<!-- MENU -->
<nav>

    <div class="nav-buttons">

        <a href="index.php">Home</a>

        <a href="produtos.php">Produtos</a>

        <a href="atendimento.php">Atendimento</a>

    </div>

</nav>

<div class="container">

    <h1>
        <i class="fa-solid fa-cart-shopping"></i>
        Meu Carrinho
    </h1>

    <div class="conteudo">

        <!-- Produtos -->
        <div class="produtos">

            <div class="produto">

                <img src="img/racao.jpg" alt="Ração">

                <div class="info">

                    <h3>Ração Premium Cães Adultos</h3>

                    <p>1kg</p>

                    <span>R$ 89,90</span>

                </div>

                <div class="quantidade">

                    <button>-</button>

                    <input type="number" value="1">

                    <button>+</button>

                </div>

            </div>

            <div class="produto">

                <img src="img/brinquedo.jpg" alt="Brinquedo">

                <div class="info">

                    <h3>Brinquedo Mordedor</h3>

                    <p>Borracha Natural</p>

                    <span>R$ 39,90</span>

                </div>

                <div class="quantidade">

                    <button>-</button>

                    <input type="number" value="2">

                    <button>+</button>

                </div>

            </div>

            <div class="produto">

                <img src="img/coleira.jpg" alt="Coleira">

                <div class="info">

                    <h3>Coleira Ajustável</h3>

                    <p>Tamanho M</p>

                    <span>R$ 49,90</span>

                </div>

                <div class="quantidade">

                    <button>-</button>

                    <input type="number" value="1">

                    <button>+</button>

                </div>

            </div>

        </div>

        <!-- Resumo -->
        <aside class="resumo">

            <h2>Resumo da Compra</h2>

            <div class="linha">
                <span>Subtotal</span>
                <strong>R$ 219,70</strong>
            </div>

            <div class="linha">
                <span>Frete</span>
                <strong>Grátis</strong>
            </div>

            <hr>

            <div class="linha total">
                <span>Total</span>
                <strong>R$ 219,70</strong>
            </div>

            <input
                type="text"
                placeholder="Digite seu CEP">

            <button class="cep">
                Calcular Frete
            </button>

            <button class="finalizar">
                <i class="fa-solid fa-credit-card"></i>
                Finalizar Compra
            </button>

            <a href="produtos.php" class="continuar">
                Continuar Comprando
            </a>

        </aside>

    </div>

</div>

</body>

<style>

    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family:'Segoe UI',sans-serif;
    }

    body{
        background:linear-gradient(135deg,#78dfff,#b9e39a);
    }

    header{
        background:#b9e39a;
        height:160px;
        display:flex;
        align-items:center;
        justify-content:space-between;
        padding:0 40px;
        box-shadow:0 2px 8px rgba(0,0,0,0.1);
    }

    /* Espaço para centralizar logo */

    .header-left{
        width:120px;
    }

    /* LOGO */

    .logo-container{
        flex:1;
        display:flex;
        justify-content:center;
        align-items:center;
    }

    .logo-container img{
        height:140px;
        width:auto;

        /* Remove o fundo branco visualmente */
        mix-blend-mode:multiply;
    }

    /* ÍCONES */

    .header-icons{
        width:120px;
        display:flex;
        justify-content:flex-end;
        gap:25px;
    }

    .header-icons a{
        color:#006c8c;
        font-size:30px;
        transition:0.3s;
    }

    .header-icons a:hover{
        color:#33b6de;
        transform:scale(1.1);
    }

    /* NAVBAR */

    nav{
        background:#ffdfef;
        height:60px;
        display:flex;
        justify-content:flex-end;
        align-items:center;
        padding-right:40px;
    }

    /* MENU */

    .nav-buttons{
        display:flex;
        gap:35px;
    }

    .nav-buttons a{
        text-decoration:none;
        border:none;
        background:none;

        color:#006c8c;
        font-size:18px;
        font-weight:600;

        transition:0.3s;
    }

    .nav-buttons a:hover{
        color:#33b6de;
    }

    /* CONTEÚDO */

    .banner{
        text-align:center;
        padding:80px 20px;
    }

    .banner h1{
        color:#006c8c;
        font-size:48px;
        margin-bottom:20px;
    }

    .banner p{
        color:#555;
        font-size:20px;
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
        margin:40px auto;
    }

    h1{
        color:#006c8c;
        margin-bottom:30px;
    }

    .conteudo{
        display:flex;
        gap:30px;
    }

    .produtos{
        flex:2;
    }

    .produto{

        display:flex;
        align-items:center;

        background:white;

        border-radius:18px;

        padding:20px;

        margin-bottom:20px;

        box-shadow:0 8px 20px rgba(0,0,0,.1);

    }

    .produto img{

        width:120px;
        height:120px;

        object-fit:cover;

        border-radius:15px;

        margin-right:20px;

    }

    .info{
        flex:1;
    }

    .info h3{
        color:#006c8c;
        margin-bottom:8px;
    }

    .info p{
        color:#777;
        margin-bottom:10px;
    }

    .info span{

        font-size:22px;

        font-weight:bold;

        color:#33b6de;

    }

    .quantidade{

        display:flex;
        align-items:center;
        gap:10px;

    }

    .quantidade button{

        width:35px;
        height:35px;

        border:none;

        border-radius:50%;

        background:#33b6de;

        color:white;

        cursor:pointer;

        font-size:18px;

    }

    .quantidade input{

        width:60px;

        text-align:center;

        padding:8px;

    }

    .resumo{

        flex:1;

        background:white;

        border-radius:20px;

        padding:30px;

        height:fit-content;

        box-shadow:0 8px 20px rgba(0,0,0,.1);

    }

    .resumo h2{

        color:#006c8c;

        margin-bottom:25px;

    }

    .linha{

        display:flex;

        justify-content:space-between;

        margin:18px 0;

    }

    .total{

        font-size:22px;

    }

    .resumo input{

        width:100%;

        padding:12px;

        margin:20px 0;

        border:2px solid #b9e39a;

        border-radius:10px;

    }

    .cep{

        width:100%;

        padding:13px;

        border:none;

        background:#33b6de;

        color:white;

        border-radius:10px;

        cursor:pointer;

        margin-bottom:15px;

    }

    .finalizar{

        width:100%;

        padding:15px;

        background:#006c8c;

        color:white;

        border:none;

        border-radius:10px;

        font-size:18px;

        cursor:pointer;

        transition:.3s;

    }

    .finalizar:hover{

        background:#33b6de;

    }

    .continuar{

        display:block;

        text-align:center;

        margin-top:20px;

        color:#006c8c;

        text-decoration:none;

        font-weight:bold;

    }

</style>

</html>
