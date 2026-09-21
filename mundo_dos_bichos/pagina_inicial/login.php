
<?php
    $mensagem = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"] ?? "";
        $senha = $_POST["senha"] ?? "";

        if (empty($email) || empty($senha)) {
            $mensagem = "Por favor, preencha todos os campos.";
        } else {
            // Aqui você poderá colocar a validação com o banco de dados futuramente.
            $mensagem = "Login realizado com sucesso!";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do Tutor | Pet Shop</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main class="pagina-login">

        <section class="lado-esquerdo">

            <div class="logo">
                🐾
            </div>

            <h1>Olá, Tutor!</h1>

            <p>
                Entre na sua conta para acompanhar
                os cuidados e serviços do seu pet.
            </p>

            <div class="patinhas">
                🐾　🐾　🐾
            </div>

        </section>


        <section class="lado-direito">

            <div class="login-box">

                <h2>Login</h2>

                <p class="subtitulo">
                    Acesse sua conta de tutor
                </p>

                <?php if (!empty($mensagem)): ?>
                    <div class="mensagem">
                        <?php echo $mensagem; ?>
                    </div>
                <?php endif; ?>

                <form method="POST" action="">

                    <div class="campo">
                        <label for="email">E-mail</label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Digite seu e-mail"
                            required
                        >
                    </div>

                    <div class="campo">
                        <label for="senha">Senha</label>

                        <input
                            type="password"
                            id="senha"
                            name="senha"
                            placeholder="Digite sua senha"
                            required
                        >
                    </div>

                    <div class="opcoes">

                        <label class="lembrar">
                            <input type="checkbox" name="lembrar">
                            Lembrar de mim
                        </label>

                        <a href="#">Esqueci minha senha</a>

                    </div>

                    <button type="submit">
                        Entrar
                    </button>

                </form>

                <div class="cadastro">
                    <p>
                        Ainda não possui uma conta?
                    </p>

                    <a href="cadastro.php">
                        Cadastre-se
                    </a>
                </div>

            </div>

        </section>

    </main>

</body>

<style>
    /* =========================
    PALETA DE CORES
    =========================

    Azul claro: #78dfff
    Azul médio: #33b6de
    Azul escuro: #006c8c
    Verde:      #b9e39a
    Rosa:       #FAB9DA
    */


    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }


    body {
    font-family: Arial, Helvetica, sans-serif;

    min-height: 100vh;

    background-color: #78dfff;

    display: flex;
    align-items: center;
    justify-content: center;
    }


    .pagina-login {
    width: 900px;
    min-height: 560px;

    background-color: white;

    border-radius: 30px;

    overflow: hidden;

    display: flex;

    box-shadow: 0 15px 40px rgba(0, 108, 140, 0.25);
    }


    /* =========================
    LADO ESQUERDO
    ========================= */

    .lado-esquerdo {
    width: 45%;

    background-color: #33b6de;

    color: white;

    display: flex;
    flex-direction: column;

    justify-content: center;
    align-items: center;

    text-align: center;

    padding: 40px;
    }


    .logo {
    width: 90px;
    height: 90px;

    background-color: #FAB9DA;

    border-radius: 50%;

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 45px;

    margin-bottom: 25px;

    box-shadow: 0 8px 15px rgba(0, 108, 140, 0.2);
    }


    .lado-esquerdo h1 {
    font-size: 38px;

    margin-bottom: 15px;

    color: white;
    }


    .lado-esquerdo p {
    font-size: 17px;

    line-height: 1.6;

    max-width: 300px;
    }


    .patinhas {
    margin-top: 35px;

    font-size: 24px;

    color: #b9e39a;
    }


    /* =========================
    LADO DIREITO
    ========================= */

    .lado-direito {
    width: 55%;

    background-color: #ffffff;

    display: flex;

    align-items: center;
    justify-content: center;

    padding: 40px;
    }


    .login-box {
    width: 100%;
    max-width: 380px;
    }


    .login-box h2 {
    color: #006c8c;

    font-size: 34px;

    margin-bottom: 8px;
    }


    .subtitulo {
    color: #666;

    margin-bottom: 30px;

    font-size: 15px;
    }


    /* =========================
    MENSAGEM PHP
    ========================= */

    .mensagem {
    background-color: #b9e39a;

    color: #006c8c;

    padding: 12px;

    border-radius: 10px;

    margin-bottom: 20px;

    text-align: center;

    font-size: 14px;
    }


    /* =========================
    CAMPOS
    ========================= */

    .campo {
    margin-bottom: 20px;
    }


    .campo label {
    display: block;

    color: #006c8c;

    font-weight: bold;

    margin-bottom: 8px;
    }


    .campo input {
    width: 100%;

    padding: 14px 16px;

    border: 2px solid #78dfff;

    border-radius: 12px;

    outline: none;

    font-size: 15px;

    transition: 0.3s;
    }


    .campo input:focus {
    border-color: #33b6de;

    box-shadow: 0 0 0 3px rgba(120, 223, 255, 0.25);
    }


    .campo input::placeholder {
    color: #999;
    }


    /* =========================
    OPÇÕES
    ========================= */

    .opcoes {
    display: flex;

    justify-content: space-between;

    align-items: center;

    margin-bottom: 25px;

    font-size: 13px;
    }


    .lembrar {
    color: #555;

    display: flex;

    align-items: center;

    gap: 6px;
    }


    .lembrar input {
    accent-color: #33b6de;
    }


    .opcoes a {
    color: #006c8c;

    text-decoration: none;

    font-weight: bold;
    }


    .opcoes a:hover {
    color: #FAB9DA;
    }


    /* =========================
    BOTÃO
    ========================= */

    button {
    width: 100%;

    padding: 15px;

    border: none;

    border-radius: 12px;

    background-color: #006c8c;

    color: white;

    font-size: 17px;

    font-weight: bold;

    cursor: pointer;

    transition: 0.3s;
    }


    button:hover {
    background-color: #33b6de;

    transform: translateY(-2px);

    box-shadow: 0 6px 15px rgba(51, 182, 222, 0.3);
    }


    /* =========================
    CADASTRO
    ========================= */

    .cadastro {
    text-align: center;

    margin-top: 25px;

    font-size: 14px;

    color: #666;
    }


    .cadastro a {
    display: inline-block;

    margin-top: 7px;

    color: #006c8c;

    font-weight: bold;

    text-decoration: none;
    }


    .cadastro a:hover {
    color: #FAB9DA;
    }


    /* =========================
    RESPONSIVIDADE
    ========================= */

    @media (max-width: 750px) {

    .pagina-login {
    width: 90%;

    flex-direction: column;

    min-height: auto;
    }

    .lado-esquerdo {
    width: 100%;

    padding: 35px 20px;
    }

    .lado-esquerdo h1 {
    font-size: 30px;
    }

    .lado-direito {
    width: 100%;

    padding: 35px 25px;
    }
    }


    @media (max-width: 450px) {

    .pagina-login {
    width: 95%;

    border-radius: 20px;
    }

    .opcoes {
    flex-direction: column;

    gap: 12px;

    align-items: flex-start;
    }

    }
</style>
</html>