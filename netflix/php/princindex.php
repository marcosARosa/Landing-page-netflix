<?php include_once("config/conexao.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <script src="https://kit.fontawesome.com/9ae7d0c399.js" crossorigin="anonymous"></script>

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

        .btn-sair {
            padding: 0.5em 2em;
            background-color: #DF0712;
            border-radius: 5px;
            border: 1px #DF0712;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <?php

    $queryConsulta = "SELECT email FROM tbl_cadastros";
    $consulta = mysqli_query($conexao, $queryConsulta);
    $resultado = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

    foreach ($resultado as $usuario) {
    }
    ?>
    <header>

        <header>
            <nav>
                <div>
                    <a href="login.php"><img src="../imagens/logonetflix.png" alt=""></a>
                </div>
                <div>
                    <span><?php echo " " . $usuario['email'] . " ";  ?></span>
                    <button class="btn-sair">sair</button>
                </div>
            </nav>
            <hr>
        </header>
        <main>
            <section>
                <div><input type="search" placeholder="Pesquisar"><i class="fa-solid fa-magnifying-glass"></i></div>
            </section>
            <section>
                <div>card 1</div>
                <div>card 2</div>
                <div>card 3</div>
                <div>card 4</div>
                <div>card 5</div>
            </section>
        </main>

    </header>




</body>

</html>