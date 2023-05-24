<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];


   include "conexao.php";

    $sql_inserir = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome','$email','$senha')";

    $um_usuario = mysqli_query($conexao, $sql_inserir);

    echo "Usuário cadastrado com sucesso!";

    header("location:novo-usuario.php?msg=sucesso");


    
    mysqli_close($conexao);

?>
