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
        $contato = $_POST["cxpesquisa"];
        $consulta = "select * from tbcomercio where contato = '$contato'";
        $executar = mysqli_query($conn,$consulta);
        $linha = mysqli_fetch_array($executar);
   ?>
   Contato:
   <input type="text" value="<?php echo $linha['contato']?>"/><br>
   Empresa:
   <input type="text" value="<?php echo $linha['empresa']?>"/><br> 
   Telefone:
   <input type="text" value="<?php echo $linha['tel']?>"/><br>
   E-mail:
   <input type="text" value="<?php echo $linha['email']?>"/>
</body>
</html>