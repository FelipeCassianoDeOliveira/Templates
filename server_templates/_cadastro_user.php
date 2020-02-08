<?php 

    include 'conexao.php';

    $nameUser = $_POST['nomeUser'];
    $sobreNomeUser = $_POST['sobrenomeUser'];
    $emailUser = $_POST['emailUser'];
    $passUser = $_POST['senhaUser'];

    $sql = "

    INSERT INTO 
        usuario(nome,sobrenome,email,senha)
        values('$nameUser','$sobreNomeUser','$emailUser','$passUser')";

    $inserir = mysqli_query($conexao,$sql);

?>
