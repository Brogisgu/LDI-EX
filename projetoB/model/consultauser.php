<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styleuser.css">
    <title>Consulta Usuario</title>
    </head>
<body>
<header>
        <h1>Consulte Usuário</h1>
        <nav>
            <ul>
                <li><a href="telamenu.php">Menu</a></li>

            </ul>
        </nav>
    </header>

    <form>
    <label for="">Nome:</label>
    <input type="text" name="" value="<?php  ['nome'] ?>"/>

    <label for="">E-mail:</label>
    <input type="email" name="" value= ['email']"/>

    <label for="">Senha:</label>
    <input type="password" name="" value="<?php echo $linha ['senha'] ?>"/>

    </form>
<?php 
    include_once "../factory/conexao.php";
    if(isset($_POST["cxpesquisanome"])) {
        $nome = $_POST["cxpesquisanome"];
        $consultar = "SELECT * FROM tbusuario WHERE nome = '$nome'";
        $executar = mysqli_query($conn, $consultar);
        $linha = mysqli_fetch_array($executar);
        


    ?> 


<?php 
        } else {
            echo "<div class='mensagem'><h2>Usuário não encontrado. Verifique o nome e tente novamente.</h2></div>";
        }
    
    ?>

</body>
</html>