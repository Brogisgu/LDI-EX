<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar comércio</title>
</head>
<body>
    <form action="../model/inserircomercio.php" method="POST">
        <h4>Contato:</h4><input type="text" name="cxcontato" class="cxcontato">
        <h4>Empresa:</h4><input type="text" name="cxempresa" class="cxempresa">
        <h4>Telefone:</h4><input type="text" name="cxtelefone" class="cxtelefone">
        <h4>E-mail:</h4><input type="text" name="cxemail" class="cxemail">
        <input type="submit" value="Cadastrar">
    </form>
    <hr size="10" width="50%" color="#0ff"/>
        <form action="../model/consultacomercionome.php" method="POST">
            <label for="">Digite o nome completo de usuário</label><br>
            <input type="text" name="cxpesquisa"/>
            <input type="submit" value="Pesquisa"/>
        </form>
</body>
</html>