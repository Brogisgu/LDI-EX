<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    </head>
<body>
<header>
        <h1>Consulte seu Comércio</h1>
        <nav>
            <ul>
                <li><a href="index.php">Menu</a></li>

            </ul>
        </nav>
    </header>
    
    
        <form>
            <label for="">Nome:</label>
            <input type="text" name="" value="<?php echo $linha['nome'] ?>"/>

            <label for="">Empresa:</label>
            <input type="text" name="" value="<?php echo $linha['comercio'] ?>"/>

            <label for="">Telefone:</label>
            <input type="text" name="" value="<?php echo $linha['telefone'] ?>"/>

            <label for="">WhatsApp:</label>
            <input type="text" name="" value="<?php echo $linha['whats'] ?>"/>
        </form>

    <?php 
    include_once "../factory/conexao.php";
  
    if(isset($_POST["comercio_name"])) {
        $nome = $_POST["comercio_name"];
        $consultar = "SELECT * FROM tbcomercial WHERE comercio = '$nome'";
        $executar = mysqli_query($conn, $consultar);
        $linha = mysqli_fetch_array($executar);
        
     
        if($linha) {

        } else {
        
            echo "<div class='mensagem'><h2>Comércio não encontrado. Verifique o nome e tente novamente<h2></div>";
        }
    }
        
    ?>
</body>
</html>