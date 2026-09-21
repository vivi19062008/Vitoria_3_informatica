<?php

session_start();


// Verifica se existem dados do pet

if (!isset($_SESSION["pet"])) {

    header("Location: forms.php");
    exit;

}




// Recupera os dados

$pet = $_SESSION["pet"];

$namePET = $pet["nome"];
$especie = $pet["especie"];
$raca = $pet["raca"];
$peso = $pet["peso"];
$gender = $pet["sexo"];
$observacao = $pet["observacao"];

?>


<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Cadastro realizado com sucesso!</title>

    </head>

    <style>

        * {
            box-sizing: border-box;
        }


        body {
            margin: 0;

            background: #78dfff;

            font-family: Arial, sans-serif;

            min-height: 100vh;
        }


        /* ==================================
           HEADER
        ================================== */

        .header {
            height: 100px;

            width: 100%;

            background-color: #b9e39a;

            display: flex;

            align-items: center;

            justify-content: center;

            position: relative;

            padding: 0 50px;

            border-bottom: 3px solid #78dfff;

            box-shadow: 0 3px 12px rgba(0, 108, 140, 0.12);
        }


        .header-esquerdo {
            position: absolute;

            left: 50px;

            color: #006c8c;

            font-size: 14px;

            font-weight: bold;
        }


        .logo-container {
            display: flex;

            align-items: center;

            justify-content: center;
        }


        .logo-container img {
            max-height: 80px;

            max-width: 180px;

            object-fit: contain;
        }


        .header-direito {
            position: absolute;

            right: 50px;

            display: flex;

            align-items: center;

            gap: 28px;
        }


        .icone-header {
            display: flex;

            flex-direction: column;

            align-items: center;

            gap: 5px;

            text-decoration: none;

            color: #006c8c;

            font-size: 13px;

            font-weight: bold;

            transition: 0.3s;
        }


        .icone-header i {
            font-size: 23px;
        }


        .icone-header:hover {
            color: #33b6de;

            transform: translateY(-2px);
        }


        .icone-header:first-child i {
            color: #33b6de;
        }


        .perfil i {
            color: #006c8c;
        }


        .perfil:hover i {
            color: #FAB9DA;
        }


        /* ==================================
           NAV
        ================================== */

        .nav {
            background-color: #006c8c;

            width: 100%;

            box-shadow: 0 3px 8px rgba(0, 108, 140, 0.2);
        }


        .nav-container {
            min-height: 58px;

            display: flex;

            justify-content: center;

            align-items: center;

            gap: 8px;
        }


        .nav-link {
            height: 58px;

            padding: 0 22px;

            display: flex;

            align-items: center;

            gap: 8px;

            text-decoration: none;

            color: white;

            font-size: 15px;

            font-weight: bold;

            transition: 0.3s;

            position: relative;
        }


        .nav-link i {
            font-size: 15px;
        }


        .nav-link:hover {
            background-color: #33b6de;

            color: white;
        }


        .nav-link::after {
            content: "";

            position: absolute;

            bottom: 0;

            left: 50%;

            width: 0;

            height: 4px;

            background-color: #FAB9DA;

            transition: 0.3s;

            transform: translateX(-50%);
        }


        .nav-link:hover::after {
            width: 70%;
        }


        /* ==================================
           CARD
        ================================== */

        .card {
            background: white;

            padding: 40px;

            border-radius: 15px;

            box-shadow: 0 10px 30px rgba(0, 108, 140, 0.25);

            width: 400px;

            max-width: 90%;

            text-align: center;

            margin: 40px auto;
        }


        .icone {
            width: 70px;

            height: 70px;

            margin: 0 auto 20px;

            background: #33b6de;

            color: white;

            border-radius: 50%;

            display: flex;

            justify-content: center;

            align-items: center;

            font-size: 35px;
        }


        h2 {
            color: #006c8c;

            margin-bottom: 10px;
        }


        .mensagem {
            color: #006c8c;

            font-size: 17px;

            margin-bottom: 25px;
        }


        .dados {
            background: #b9e39a;

            padding: 15px;

            border-radius: 10px;

            margin-bottom: 25px;

            text-align: left;
        }


        .dados p {
            margin: 8px 0;

            font-size: 16px;

            color: #006c8c;
        }


        .botoes {
            display: flex;

            flex-direction: column;

            gap: 10px;
        }


        .botao {
            display: block;

            padding: 12px 20px;

            background: #33b6de;

            color: white;

            text-decoration: none;

            border-radius: 8px;

            font-size: 16px;

            transition: 0.3s;
        }


        .botao:hover {
            background: #006c8c;
        }


        .botao.secundario {
            background: #78dfff;

            color: #006c8c;
        }


        .botao.secundario:hover {
            background: #b9e39a;
        }


        /* ==================================
           RESPONSIVIDADE
        ================================== */

        @media (max-width: 900px) {

            .header-esquerdo {
                display: none;
            }

            .header {
                padding: 0 20px;
            }

            .header-direito {
                right: 20px;
            }

            .nav-container {
                flex-wrap: wrap;

                gap: 0;
            }

            .nav-link {
                padding: 0 12px;

                font-size: 13px;
            }

        }


        @media (max-width: 600px) {

            .header {
                height: 85px;
            }

            .header-direito {
                gap: 15px;
            }

            .icone-header span {
                display: none;
            }

            .icone-header i {
                font-size: 22px;
            }

            .nav {
                overflow-x: auto;
            }

            .nav-container {
                width: max-content;

                flex-wrap: nowrap;
            }

            .nav-link {
                height: 50px;

                padding: 0 14px;
            }


            .card {
                padding: 30px 20px;

                margin: 25px auto;
            }

        }

        /* FOOTER */
        .footer {
            background-color: #78dfff;
            color: #000000;
            width: 100%;
            margin-top: 40px;
        }

        /* Área principal do footer */
        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 50px;
            display: flex;
            justify-content: space-between;
            gap: 40px;
        }

        /* Seções */
        .footer-section {
            flex: 1;
        }

        .footer-section h3 {
            font-size: 20px;
            margin-bottom: 15px;
            color: #000000;
        }

        .footer-section p {
            font-size: 15px;
            line-height: 1.7;
            margin-bottom: 8px;
        }

        /* Ícones */
        .footer-section i {
            margin-right: 8px;
        }

        /* Redes sociais */
        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 10px;
        }

        .social-icons a {
            width: 42px;
            height: 42px;
            background-color: #33b6de;
            color: #000000;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: 20px;
            transition: 0.3s;
        }

        .social-icons a:hover {
            background-color: #ffffff;
            transform: translateY(-3px);
        }

        /* Parte inferior */
        .footer-bottom {
            background-color: #33b6de;
            text-align: center;
            padding: 15px 20px;
        }

        .footer-bottom p {
            margin: 0;
            font-size: 14px;
        }

        /* Responsividade */
        @media (max-width: 768px) {

            .footer-container {
                flex-direction: column;
                text-align: center;
                padding: 35px 25px;
            }

            .social-icons {
                justify-content: center;
            }
        }

    </style>

<body>

<header class="header">

    <!-- Logo esquerda -->
    <div class="header-esquerdo">
        <img src="../img/logo_animalPetShop.png"
             alt="Logo Mundo dos Bichos">
    </div>

    <!-- Logo central -->
    <div class="logo-container">
        <img src="../img/ChatGPT%20Image%2021%20de%20set.%20de%202026,%2008_47_11.png"
             alt="Mundo dos Bichos">
    </div>

    <!-- Área direita -->
    <div class="header-direito">

        <a href="carrinho.php" class="icone-header">
            <i class="fa-solid fa-cart-shopping"></i>
            <span>Carrinho</span>
        </a>

        <a href="perfil.php" class="icone-header perfil">
            <i class="fa-solid fa-circle-user"></i>
            <span>Meu Perfil</span>
        </a>

    </div>

</header>


<!-- NAV -->
<nav class="nav">

    <div class="nav-container">

        <a href="index.php" class="nav-link">
            <i class="fa-solid fa-house"></i>
            Home
        </a>

        <a href="produtos.php" class="nav-link">
            <i class="fa-solid fa-bone"></i>
            Produtos
        </a>

        <a href="adocao.php" class="nav-link">
            <i class="fa-solid fa-paw"></i>
            Adoção
        </a>

        <a href="atendimento.php" class="nav-link">
            <i class="fa-solid fa-headset"></i>
            Atendimento
        </a>

        <a href="cadastro.php" class="nav-link">
            <i class="fa-solid fa-user-plus"></i>
            Cadastro
        </a>

        <a href="sobre.php" class="nav-link">
            <i class="fa-solid fa-heart"></i>
            Sobre Nós
        </a>

    </div>

</nav>


<div class="card">

    <div class="icone">✓</div>

    <h2>Cadastro do pet realizado!</h2>

    <p class="mensagem">
        O cadastro do seu pet foi realizado com sucesso.
    </p>


    <div class="dados">

        <p>

            <strong>Pet:</strong>

            <?= htmlspecialchars($namePET) ?>

        </p>


        <p>

            <strong>Espécie:</strong>

            <?= htmlspecialchars($especie) ?>

        </p>


        <p>

            <strong>Raça:</strong>

            <?= htmlspecialchars($raca) ?>

        </p>


        <p>

            <strong>Peso:</strong>

            <?= htmlspecialchars($peso) ?>

        </p>


        <p>

            <strong>Genêro:</strong>

            <?= htmlspecialchars($gender) ?>

        </p>

    </div>


    <div class="botoes">

        <a
                href="index.php"
                class="botao"
        >
            Voltar à página inicial
        </a>


        <a
                href="forms.php"
                class="botao secundario"
        >
            Cadastrar outro pet
        </a>

    </div>

</div>


<!-- ================================
     FOOTER
================================= -->

<footer class="footer">

    <div class="footer-container">

        <div class="footer-section">

            <h3>Escola Estadual Maria Luiza Miranda Bastos</h3>

            <p>
                Educação, conhecimento e desenvolvimento
                para nossos alunos.
            </p>

        </div>


        <div class="footer-section">

            <h3>Contato</h3>

            <p>
                <i class="fa-solid fa-phone"></i>
                (31) 3443-7477
            </p>

            <p>
                <i class="fa-solid fa-envelope"></i>
                escola.2500@educacao.mg.gov.br
            </p>

            <p>
                <i class="fa-solid fa-location-dot"></i>
                Rua São José do Jacuri, 60 - Planalto
            </p>

            <p>
                <i class="fa-solid fa-city"></i>
                Belo Horizonte - MG
            </p>

        </div>


        <div class="footer-section">

            <h3>Redes Sociais</h3>

            <div class="social-icons">

                <a href="#" aria-label="Instagram">
                    <i class="fa-brands fa-instagram"></i>
                </a>

                <a href="https://www.facebook.com/pages/Escola-Estadual-Maria-Luiza-Miranda-Bastos/196619360362700"
                   target="_blank"
                   aria-label="Facebook">

                    <i class="fa-brands fa-facebook"></i>

                </a>

            </div>

            <p class="redes-texto">
                Acompanhe as novidades da escola.
            </p>

        </div>

    </div>


    <div class="footer-bottom">

        <p>
            &copy; <?php echo date("Y"); ?>
            Escola Estadual Maria Luiza Miranda Bastos -
            Todos os direitos reservados.
        </p>

    </div>

</footer>

</body>


</html>