<?php
include "cabecalho.php";
include "menu-sistemas.php";


$id = $_GET["id"];
$titulo = $categoria = $foto = $video = "";
include "conexao.php";
$sql_buscar = "select * from jogo where id = $id";
$todos_os_jogos = mysqli_query($conexao, $sql_buscar);
while ($um_jogo = mysqli_fetch_assoc($todos_os_jogos)):

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
            <h3>Título: <?php echo $titulo;?></h3>
            <p> <img src="<?php echo $foto;?>" width="300"></p>
            <p> Categoria: <?php echo $categoria;?></p>
            <p><a href="<?php echo $video;?>">Vídeo</a></p>


        </div>
    </div>

</div>