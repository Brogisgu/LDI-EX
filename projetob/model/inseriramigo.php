<?php
    if($_POST["cxamigo"] != ""){
        include_once "../factory/conexao.php";
        $nome = $_POST["cxamigo"];
        $email = $_POST["cxemail"];
        $datanasc = $_POST["cxdatanasc"];
        $telefone = $_POST["cxtelefone"];
        $sql = "insert into tbamigos (nome, email, datanasc, tel) values ('$nome', '$email', '$datanasc', '$telefone')";
        $query = mysqli_query($conn,$sql);
        echo "Dados cadastrados com sucesso!";
    }
    else{
        echo "Dados não cadastrados";
    }
?>