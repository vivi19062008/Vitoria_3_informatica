<?php
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mundo dos Bichos</title>

    <link rel="stylesheet" href="css/header.css">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

<!-- HEADER -->

<header class="header">

    <!-- Espaço esquerdo -->
    <div class="header-esquerdo">
        <span>🐾 Cuidando de quem você ama</span>
    </div>


    <!-- LOGO CENTRAL -->

    <div class="logo-container">
        <img src="../img/logo.png" alt="Logo Mundo Dos Bichos">
    </div>

    <!-- OPÇÕES DO CLIENTE -->

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


</body>
</html>

<style>
/* ================================
PALETA DO MUNDO DOS BICHOS
================================

Azul claro  #78dfff
Azul médio  #33b6de
Azul escuro #006c8c
Verde       #b9e39a
Rosa        #FAB9DA

================================ */


* {
margin: 0;
padding: 0;
box-sizing: border-box;
}


body {
font-family: Arial, Helvetica, sans-serif;

background-color: #ffffff;
}


/* ================================
HEADER
================================ */

.header {
height: 100px;

background-color: #c2eda9;

display: flex;

align-items: center;

justify-content: center;

position: relative;

padding: 0 50px;

border-bottom: 3px solid #78dfff;

box-shadow: 0 3px 12px rgba(0, 108, 140, 0.12);
}


/* ================================
TEXTO DO LADO ESQUERDO
================================ */

.header-esquerdo {
position: absolute;

left: 50px;

color: #006c8c;

font-size: 14px;

font-weight: bold;
}


/* ================================
LOGO
================================ */

.logo {
display: flex;

align-items: center;

gap: 12px;

text-decoration: none;

color: #006c8c;

font-size: 25px;

font-weight: bold;

transition: 0.3s;
}


.logo:hover {
color: #33b6de;
}


.logo-icone {
width: 48px;

height: 48px;

border-radius: 50%;

background-color: #FAB9DA;

display: flex;

align-items: center;

justify-content: center;

color: #006c8c;

font-size: 25px;

box-shadow: 0 4px 8px rgba(0, 108, 140, 0.15);
}


/* ================================
ÁREA DIREITA
================================ */

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


/* Carrinho */

.icone-header:first-child i {
color: #33b6de;
}


/* Perfil */

.perfil i {
color: #006c8c;
}


.perfil:hover i {
color: #FAB9DA;
}


/* ================================
NAV
================================ */

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


/* ================================
EFEITO HOVER
================================ */

.nav-link:hover {
background-color: #33b6de;

color: white;
}


/* Linha inferior */

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


/* ================================
RESPONSIVIDADE
================================ */

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

.logo span {
display: none;
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

.logo-icone {
width: 43px;

height: 43px;
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

}
</style>

