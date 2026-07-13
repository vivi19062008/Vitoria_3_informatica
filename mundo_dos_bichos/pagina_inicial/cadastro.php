<?php
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Mundo dos Bichos</title>

    <link rel="stylesheet" href="css/cadastro.css">

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

<div class="container">

    <div class="lado-esquerdo">

        <i class="fa-solid fa-dog"></i>

        <h1>Bem-vindo!</h1>

        <p>
            Cadastre-se e aproveite ofertas exclusivas,
            descontos especiais e tudo para deixar seu
            pet mais feliz.
        </p>

    </div>

    <div class="lado-direito">

        <h2>Criar Conta</h2>

        <form action="#" method="post">

            <div class="campo">
                <label>Nome Completo</label>
                <input type="text" required>
            </div>

            <div class="campo">
                <label>E-mail</label>
                <input type="email" required>
            </div>

            <div class="linha">

                <div class="campo">
                    <label>CPF</label>
                    <input type="text">
                </div>

                <div class="campo">
                    <label>Telefone</label>
                    <input type="text">
                </div>

            </div>

            <div class="campo">
                <label>Endereço</label>
                <input type="text">
            </div>

            <div class="linha">

                <div class="campo">
                    <label>Senha</label>
                    <input type="password" required>
                </div>

                <div class="campo">
                    <label>Confirmar Senha</label>
                    <input type="password" required>
                </div>

            </div>

            <button type="submit">
                <i class="fa-solid fa-user-plus"></i>
                Cadastrar
            </button>

        </form>

        <p class="login">
            Já possui uma conta?

            <a href="login.php">
                Fazer Login
            </a>

        </p>

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

        min-height:100vh;

        display:flex;
        flex-direction:column;

    }

    header{

        height:80px;

        background:#006c8c;

        display:flex;

        align-items:center;

        padding:0 40px;

        box-shadow:0 3px 10px rgba(0,0,0,.15);

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

        width:1100px;

        margin:50px auto;

        background:white;

        border-radius:25px;

        overflow:hidden;

        display:flex;

        box-shadow:0 15px 40px rgba(0,0,0,.15);

    }

    .lado-esquerdo{

        width:40%;

        background:linear-gradient(180deg,#006c8c,#33b6de);

        color:white;

        display:flex;

        flex-direction:column;

        justify-content:center;

        align-items:center;

        padding:40px;

    }

    .lado-esquerdo i{

        font-size:120px;

        margin-bottom:25px;

    }

    .lado-esquerdo h1{

        margin-bottom:20px;

    }

    .lado-esquerdo p{

        text-align:center;

        line-height:28px;

    }

    .lado-direito{

        width:60%;

        padding:45px;

    }

    .lado-direito h2{

        color:#006c8c;

        margin-bottom:25px;

    }

    .campo{

        display:flex;

        flex-direction:column;

        margin-bottom:20px;

        width:100%;

    }

    .campo label{

        margin-bottom:8px;

        color:#555;

        font-weight:600;

    }

    .campo input{

        padding:14px;

        border:2px solid #b9e39a;

        border-radius:12px;

        outline:none;

        transition:.3s;

    }

    .campo input:focus{

        border-color:#33b6de;

    }

    .linha{

        display:flex;

        gap:20px;

    }

    button{

        width:100%;

        padding:16px;

        margin-top:15px;

        border:none;

        border-radius:12px;

        background:#006c8c;

        color:white;

        font-size:18px;

        cursor:pointer;

        transition:.3s;

    }

    button:hover{

        background:#33b6de;

        transform:translateY(-3px);

    }

    .login{

        margin-top:25px;

        text-align:center;

    }

    .login a{

        color:#006c8c;

        text-decoration:none;

        font-weight:bold;

    }

    .login a:hover{

        color:#33b6de;

    }

</style>

</html>