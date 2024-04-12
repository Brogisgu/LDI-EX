<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        include_once "../factory/conexao.php";
        $nome = $_POST["cxpesquisa"];
        $consulta = "select * from tbamigos where nome = '$nome'";
        $executar = mysqli_query($conn,$consulta);
        $linha = mysqli_fetch_array($executar);
   ?>
   Nome:
   <input type="text" value="<?php echo $linha['nome']?>"/><br>
   E-mail:
   <input type="text" value="<?php echo $linha['email']?>"/><br> 
   Data de Nascimento:
   <input type="date" value="<?php echo $linha['datanasc']?>"/><br>
   Telefone:
   <input type="text" value="<?php echo $linha['tel']?>"/>
</body>
</html>