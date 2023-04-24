<?php include_once('config/conexao.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senha</title>


    <style>
        * {
            font-family: sans-serif;
        }

        nav img {
            width: 15%;
            padding: 20px 50px;

        }

        nav {
            display: flex;
            align-items: center;
        }

        nav button {
            background-color: transparent;
            border: 0;
            font-weight: bold;
            font-size: 17px;
            padding: 0px 60px;
            cursor: pointer;
        }

        nav button:hover {
            text-decoration: underline;
        }

        main {
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        main .forms {
            margin: 15px 20%;
        }



        main div form input {
            display: block;
            margin: 10px auto;
            padding: 2em 7em;
            border-radius: 3px;
            border: solid 1px #ddd;

        }

        main div form button {
            padding: 2em 12em;
            color: #fff;
            background-color: #E50914;
            border-radius: 3px;
            border: solid 1px #ddd;

        }

        h3 {
            font-size: 3em;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <a href="login.php"><img src="../imagens/logonetflix.png" alt=""></a>
            <div><button>Entrar</button></div>
        </nav>
        <hr>
        <main>
            <div class="forms">
                <h3>Crie uma senha para iniciar sua assinatura </h3>
                <form action="cadastrosenha.php" method="POST">
                    <input type="email" name="email" value="<?php $email = $_POST['email'];
                                                            echo "$email"; ?>" />
                    <input type="text" name="nome" placeholder="Nome">
                    <input type="password" name="senha" placeholder="Informe sua senha">
                    <button>Entrar</button>
                </form>
            </div>
        </main>
    </header>


</body>

</html>