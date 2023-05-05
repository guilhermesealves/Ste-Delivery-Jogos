<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php

    include "cabecalho.php";
    include "menu-sistemas.php";

    ?>

    <style>
        a {
            text-decoration: none;
            color: black;
        }
    </style>


    <div class="Container mt-5 ms-5">
        <div class="row">
            <div class="col">

                <button><a href="listar-jogos.php">Gerenciar Jogos</a></button>
                <button> <a href="listar-usuario.php">Gerenciar Usuários</a> </button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <?php
                    $servidor_bd = "127.0.0.1";
                    $usuario_bd = "root";
                    $senha_bd = "";
                    $banco_de_dados = "delivery_jogos_novo";

                    $conexao = mysqli_connect($servidor_bd, $usuario_bd, $senha_bd, $banco_de_dados);

                    $sql_buscar = "select * from usuario";

                    $todos_os_usuarios = mysqli_query($conexao, $sql_buscar);

                    while ($um_usuario = mysqli_fetch_assoc($todos_os_usuarios)) :
                    ?>
                        <tr>
                            <td> <?php echo $um_usuario["id"] ?> </td>
                            <td> <?php echo $um_usuario["nome"] ?> </td>
                            <td> <?php echo $um_usuario["email"] ?> </td>
                            
                            
                        </tr>
                    <?php
                    endwhile;
                    mysqli_close($conexao);
                    ?>
                </table>
            </div>
        </div>

    </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>