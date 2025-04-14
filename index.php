<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Moiés Salgado de Morais">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PW2 - Atividade Semana 4</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <nav>

        </nav>
    </header>
    <main>
    <h2>Formulário de contato</h2>
    <br>
    <h4>Preencha os campos com (*) abaixo:</h4>
    <br>
        <form action="processa_dados.php" method="POST" enctype="multipart/form-data">

            <label for="nome">* Nome:</label>
            <input type="text" id="nome" name="nome" required maxlength="96" size="31"
                placeholder="Digite aqui" /><br><br>

            <label for="cidade">* Cidade:</label>
            <input type="text" id="cidade" name="cidade" required maxlength="45" size="30"
                placeholder="Digite aqui" /><br><br>

            <label for="telefone">* Telefone: </label>
            <input type="tel" id="telefone" name="Telefone" required maxlength="14" size="14" pattern="\([0-9]{2}\)[0-9]{4,5}-[0-9]{4}$" placeholder="(xx)xxxxx-xxxx" /> <br><br>

            <input type="reset" value="Limpar">
            <input type="submit" value="Enviar">
            
        </form>
    </main>
    <footer>
        <br><br>
        <p>&copy; <?php echo date("Y"); ?> by Moisés Salgado de Morais. Todos os Direitos Reservados.</p>
    </footer>
</body>

</html>