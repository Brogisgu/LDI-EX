<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleuser.css">
    <title>Comércio</title>
    <script>
        function toggleForms() {
            var cadastroForm = document.getElementById("cadastroForm");
            var consultaForm = document.getElementById("consultaForm");

            cadastroForm.style.display = cadastroForm.style.display === "none" ? "block" : "none";
            consultaForm.style.display = consultaForm.style.display === "none" ? "block" : "none";
        }
    </script>
</head>

<body>
    <header>
        <h1>Cadastro Comercial</h1>
        <nav>
            <ul>
                <li><a href="telamenu.php"> Menu</a></li>
            </ul>
        </nav>
    </header>

    <form action="inserircomercial.php" method="POST" id="cadastroForm">
        Nome:
        <input type="text" name="cxnome" /><br />
        Comércio:
        <input type="text" name="cxcomercio" /><br />
        Telefone:
        <input type="text" name="cxtelefone" /><br />
        Contato:
        <input type="text" name="cxwhats" /><br />
        <input type="submit" value="Gravar">
        <p>Já cadastrou seu comércio? 
            <a href="#" onclick="toggleForms()" style="color: black;">Busque-o</a> 
        </p>
    </form>

    <form  action="consultacomercio.php" id="consultaForm" style="display:none;" method="POST">
        Digite o nome do amigo: <br />
        <input type="text" name="comercio_name" />
        <input type="submit" value="Buscar" />
        <p>Ainda não cadastrou seu comércio?
            <a href="telacadcomercial.php" onclick="toggleForms()" style="color: black">Cadastre-se</a>
        </p>
    </form>
</body>

</html>