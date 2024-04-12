<?php
    if($_POST["cxempresa"] != ""){
        include_once "../factory/conexao.php";
        $contato = $_POST["cxcontato"];
        $empresa = $_POST["cxempresa"];
        $telefone = $_POST["cxtelefone"];
        $email = $_POST["cxemail"];
        $sql = "insert into tbcomercio (contato, empresa, tel, email)values ('$contato', '$empresa', '$telefone', '$email')";
        $query = mysqli_query($conn,$sql);
        echo "Dados cadastrados com sucesso";
    }
    else{
        echo "Dados não cadastrados";
    }