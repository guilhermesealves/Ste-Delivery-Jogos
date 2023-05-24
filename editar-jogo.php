<?php
include "cabecalho.php";
include "menu-sistemas.php";
include "conexao.php";

$id = $_GET["id"];

$titulo = $categoria = $foto = $video = "";


$sql_buscar = "select * from jogo where id = $id";

$todos_os_jogos = mysqli_query($conexao, $sql_buscar);

while ($um_jogo = mysqli_fetch_assoc($todos_os_jogos)) :

    $titulo = $um_jogo["titulo"];
    $categoria = $um_jogo["categoria"];
    $foto = $um_jogo["foto"];
    $video = $um_jogo["video"];
endwhile;
mysqli_close($conexao);
?>





<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>Título: <?php echo $titulo; ?></h3>
            <p> <img src="<?php echo $foto; ?>" width="300"></p>
            <p> Categoria: <?php echo $categoria; ?></p>
            <p><a href="<?php echo $video; ?>">Vídeo</a></p>


        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="salvar-jogo-editado.php?id=<?php echo $id; ?>" method="post">
                    Título: <input name="titulo" value="<?php echo $titulo; ?>">
                    Foto: <input name="foto" value="<?php echo $foto; ?> ">
                    Categoria: <input name="categoria" value="<?php echo $categoria; ?> ">
                    Vídeo: <input name="video" value="<?php echo $video; ?> ">
                    <button type="submit">Salvar</button>
                </form>
                

            </div>
        </div>

    </div>