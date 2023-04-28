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

    ?>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/Tehlast.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/Horizon.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container mt-4">
        <div class="row">
            <?php
            $servidor_bd = "127.0.0.1";
            $usuario_bd = "root";
            $senha_bd = "";
            $banco_de_dados = "delivery_jogos_novo";

            $conexao = mysqli_connect($servidor_bd, $usuario_bd, $senha_bd, $banco_de_dados);

            $sql_buscar = "select * from jogo";

            $todo_jogos = mysqli_query($conexao, $sql_buscar);



            while ($um_jogo = mysqli_fetch_assoc($todo_jogos)) :
            ?>
                <div class="col-md-3 text-center mb-4">
                    <img src="<?php echo $um_jogo["foto"]; ?>" class="img-fluid" style="object-fit: cover; height = 150px;">
                    <?php

                    $cor = "";


                    $categoria = $um_jogo["categoria"];

                    if (strtoupper($categoria == "FPS")) {
                        $cor = "red";
                    }else if (strtoupper($categoria == "Ação")){
                        $cor ="blue";

                    }else if (strtoupper($categoria == "Battle-Royal")){
                        $cor = "green";
                    }

                    ?>
                    <h7 class="mt-3 mb-3" style="color: <?php  echo $cor;  ?>"><?php echo $um_jogo["categoria"] ?></h7>
                    <h5 class="mt-3 mb-3"><?php echo $um_jogo["titulo"]; ?></h5>
                    <a href="<?php echo $um_jogo["video"]; ?>" class="btn btn-outline-primary">Ver mais</a>
                </div>
            <?php
            endwhile;
            ?>
        </div>

    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>