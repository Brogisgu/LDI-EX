<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleuser.css">
    <title>Consulta Amigo</title>
</head>
<body>
<header>
        <h1>Consulte Amigos</h1>
        <nav>
            <ul>
                <li><a href="index.php">Menu</a></li>
            </ul>
        </nav>
    </header>

    <?php
        include_once "../factory/conexao.php";
        if(isset($_POST["amigo_name"])) {
        $nome = $_POST["amigo_name"];
        $consultar = "select * from tbamigos where amigo = '$nome'";
        $executar = mysqli_query($conn, $consultar);
        $linha = mysqli_fetch_array($executar);
        if($linha) {
    ?>


        <form>
            <label for="">Nome:</label>
            <input type="text" name="" value="<?php echo $linha['amigo'] ?>"/>

            <label for="">E-mail:</label>
            <input type="email" name="" value="<?php echo $linha['email'] ?>"/>

            <label for="">Telefone:</label>
            <input type="text" name="" value="<?php echo $linha['telefone'] ?>"/>

            <label for="">WhatsApp:</label>
            <input type="text" name="" value="<?php echo $linha['whats'] ?>"/>

            <label for="">Data de Nascimento:</label>
            <input type="date" name="" value="<?php echo $linha['datanasc'] ?>"/>
        </form>

        <?php
                        } else {
                            echo "<div class='mensagem'><h2>Amigo não encontrado. Verifique o nome e tente novamente<h2></div>";
                        }
                    }      
                ?>

</body>
</html>