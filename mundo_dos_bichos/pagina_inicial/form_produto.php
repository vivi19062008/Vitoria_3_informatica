<?php

$nameError = $descricaoError = $precoError = $quantidadeError = $categoriaError = $imagemError = "";

$nome = "";
$descricao = "";
$preco = "";
$quantidade = "";
$categoria = "";
$imagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $quantidade = $_POST["quantidade"];
    $categoria = $_POST["categoria"];
    $imagem = $_POST["imagem"];

    if (empty($nome)) {
        $nameError = "Campo obrigatório.";
    }

    if (empty($descricao)) {
        $descricaoError = "Campo obrigatório.";
    }

    if (empty($preco)) {
        $precoError = "Campo obrigatório.";
    }

    if (empty($quantidade)) {
        $quantidadeError = "Campo obrigatório.";
    }

    if (empty($categoria)) {
        $categoriaError = "Campo obrigatório.";
    }

    if (empty($imagem)) {
        $imagemError = "Campo obrigatório.";
    }

    if (
        empty($nameError) &&
        empty($descricaoError) &&
        empty($precoError) &&
        empty($quantidadeError) &&
        empty($categoriaError) &&
        empty($imagemError)
    ) {
        echo "<script>
                alert('Produto cadastrado com sucesso!');
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastrar Produto</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(120deg, #71d5eb, #a9e6b9);
        }

        /* CABEÇALHO */

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

        /* CONTAINER */

        .container {
            width: 1100px;
            max-width: 90%;
            margin: 50px auto;
            display: flex;
            background-color: white;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        }

        /* LADO ESQUERDO */

        .lado-esquerdo {
            width: 40%;
            background: linear-gradient(180deg, #08738f, #159bc0);
            color: white;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            text-align: center;
            padding: 40px;
        }

        .icone-produto {
            font-size: 100px;
            margin-bottom: 20px;
        }

        .lado-esquerdo h1 {
            font-size: 34px;
            margin-bottom: 20px;
        }

        .lado-esquerdo p {
            font-size: 16px;
            line-height: 1.7;
        }

        /* FORMULÁRIO */

        .lado-direito {
            width: 60%;
            padding: 50px 45px;
        }

        .lado-direito h2 {
            color: #08738f;
            font-size: 26px;
            margin-bottom: 30px;
        }

        .campo {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-size: 15px;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 13px;
            border: 2px solid #a9df82;
            border-radius: 11px;
            outline: none;
            font-size: 15px;
            transition: 0.2s;
        }

        input:focus,
        textarea:focus,
        select:focus {
            border-color: #08738f;
        }

        textarea {
            height: 100px;
            resize: none;
        }

        /* DUAS COLUNAS */

        .linha {
            display: flex;
            gap: 20px;
        }

        .linha .campo {
            width: 50%;
        }

        /* TEXTO DE AJUDA */

        small {
            display: block;
            margin-top: 6px;
            color: #777;
            font-size: 13px;
        }

        /* ERROS */

        .erro {
            display: block;
            margin-top: 5px;
            color: #d33;
            font-size: 13px;
        }

        /* BOTÃO */

        button {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 12px;
            background-color: #08738f;
            color: white;
            font-size: 17px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.2s;
            margin-top: 5px;
        }

        button:hover {
            background-color: #075d73;
            transform: translateY(-1px);
        }

        /* RESPONSIVO */

        @media (max-width: 800px) {

            .container {
                flex-direction: column;
            }

            .lado-esquerdo,
            .lado-direito {
                width: 100%;
            }

            .lado-esquerdo {
                padding: 30px;
            }

            .linha {
                flex-direction: column;
                gap: 0;
            }

            .linha .campo {
                width: 100%;
            }
        }

    </style>

</head>

<body>

<!-- CABEÇALHO -->

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


<!-- FORMULÁRIO -->

<div class="container">

    <!-- LADO ESQUERDO -->

    <div class="lado-esquerdo">

        <div class="icone-produto">
            🐶
        </div>

        <h1>Novo Produto!</h1>

        <p>
            Cadastre novos produtos para a
            loja Mundo dos Bichos.

            <br><br>

            Preencha todas as informações
            para adicionar o produto ao sistema.
        </p>

    </div>


    <!-- LADO DIREITO -->

    <div class="lado-direito">

        <h2>Cadastrar Produto</h2>

        <form method="POST">

            <!-- NOME -->

            <div class="campo">

                <label for="nome">
                    Nome do Produto
                </label>

                <input
                    type="text"
                    id="nome"
                    name="nome"
                    placeholder="Digite o nome do produto"
                    value="<?php echo htmlspecialchars($nome); ?>"
                >

                <span class="erro">
                        <?php echo $nameError; ?>
                    </span>

            </div>


            <!-- DESCRIÇÃO -->

            <div class="campo">

                <label for="descricao">
                    Descrição
                </label>

                <textarea
                    id="descricao"
                    name="descricao"
                    placeholder="Digite a descrição do produto"
                ><?php echo htmlspecialchars($descricao); ?></textarea>

                <span class="erro">
                        <?php echo $descricaoError; ?>
                    </span>

            </div>


            <!-- PREÇO E QUANTIDADE -->

            <div class="linha">

                <div class="campo">

                    <label for="preco">
                        Preço
                    </label>

                    <input
                        type="number"
                        id="preco"
                        name="preco"
                        placeholder="R$ 0,00"
                        step="0.01"
                        min="0"
                        value="<?php echo htmlspecialchars($preco); ?>"
                    >

                    <span class="erro">
                            <?php echo $precoError; ?>
                        </span>

                </div>


                <div class="campo">

                    <label for="quantidade">
                        Quantidade
                    </label>

                    <input
                        type="number"
                        id="quantidade"
                        name="quantidade"
                        placeholder="0"
                        min="0"
                        value="<?php echo htmlspecialchars($quantidade); ?>"
                    >

                    <span class="erro">
                            <?php echo $quantidadeError; ?>
                        </span>

                </div>

            </div>


            <!-- CATEGORIA -->

            <div class="campo">

                <label for="categoria">
                    Categoria do Produto
                </label>

                <select
                    id="categoria"
                    name="categoria"
                >

                    <option value="">
                        Selecione uma categoria
                    </option>

                    <option value="comida"
                        <?php if ($categoria == "comida") echo "selected"; ?>>
                        🍖 Comida
                    </option>

                    <option value="acessorios"
                        <?php if ($categoria == "acessorios") echo "selected"; ?>>
                        🦴 Acessórios
                    </option>

                    <option value="vacinas"
                        <?php if ($categoria == "vacinas") echo "selected"; ?>>
                        💉 Vacinas
                    </option>

                    <option value="brinquedos"
                        <?php if ($categoria == "brinquedos") echo "selected"; ?>>
                        🧸 Brinquedos
                    </option>

                </select>

                <span class="erro">
                        <?php echo $categoriaError; ?>
                    </span>

            </div>


            <!-- IMAGEM -->

            <div class="campo">

                <label for="imagem">
                    Caminho da Imagem
                </label>

                <input
                    type="text"
                    id="imagem"
                    name="imagem"
                    placeholder="Ex: imagens/racao.jpg"
                    value="<?php echo htmlspecialchars($imagem); ?>"
                >

                <small>
                    Digite o caminho da imagem dentro do projeto.
                </small>

                <span class="erro">
                        <?php echo $imagemError; ?>
                    </span>

            </div>


            <!-- BOTÃO -->

            <button type="submit">
                Cadastrar Produto
            </button>

        </form>

    </div>

</div>

</body>

</html>