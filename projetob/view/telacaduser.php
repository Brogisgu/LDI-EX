<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro usuário</title>
    <link rel="stylesheet" type="text/css" href="../css/estilouser.css">
</head>
<body>
    <section id="cxcadastro">
        <form action="../model/inseriruser.php" method="POST">
        <h1>Tela de Cadastro</h1>
        <h4>Nome:</h4><input type="text" name="cxnome" class="cxnome">
        <h4>E-mail:</h4><input type="text" name="cxemail" class="cxemail">
        <h4>Senha:</h4><input type="password" name="cxpassword" class="cxpassword">
        <input type="submit" name="Enviar">
        </form>
        <hr size="10" width="50%" color="#0ff"/>
        <form action="../model/consultausernome.php" method="POST">
            <label for="">Digite o nome completo de usuário</label><br>
            <input type="text" name="cxpesquisa"/>
            <input type="submit" value="Pesquisa"/>
        </form>
    </section>
</body>
</html>