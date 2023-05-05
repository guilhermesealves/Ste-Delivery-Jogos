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

            $sql_buscar = "select * from jogo";

            $todos_os_jogos = mysqli_query($conexao, $sql_buscar);

            while ($um_jogo = mysqli_fetch_assoc($todos_os_jogos)) :
            ?>
                <tr>
                    <td> <?php echo $um_jogo["id"] ?> </td>
                    <td> <?php echo $um_jogo["titulo"] ?> </td>
                    <td> <?php echo $um_jogo["categoria"] ?> </td>
                    <td><a href="excluir-jogos.php?id=<?php echo $um_jogo["id"] ?>">Excluir Jogo
                        </a> </td>
                </tr>
            <?php
            endwhile;
            mysqli_close($conexao);
            ?>
        </table>
    </div>
</div>

</div>
</body>

</html>