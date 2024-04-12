<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Amigo</title>
</head>
<body>
    <form action="../model/inseriramigo.php" method="POST">
        <h4>Nome:</h4><input type="text" name="cxamigo" class="cxamigo">
        <h4>E-mail:</h4><input type="text" name="cxemail" class="cxemail">
        <h4>Data de nascimento:</h4><input type="date" name="cxdatanasc" class="cxdatanasc">
        <h4>Telefone:</h4><input type="text" name="cxtelefone" class="cxtelefone">
        <input type="submit" value="Cadastrar">
    </form><br>
    <form action="../model/consultaamigonome.php" method="POST">
            <label for="">Digite o nome completo de usuário</label><br>
            <input type="text" name="cxpesquisa"/>
            <input type="submit" value="Pesquisa"/>
        </form>
</body>
</html>