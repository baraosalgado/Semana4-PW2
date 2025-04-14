<link rel="stylesheet" type="text/css" href="style.css">

<?php

echo '<h3>Dados enviados com sucesso!</h3><br><br>';

$nome = $_REQUEST['nome'];
echo 'O nome informado foi: <strong>' . $nome . '</strong>. <br>';

$cidade = $_REQUEST['cidade'];
echo 'A cidade informada foi: <strong>' . $cidade . '</strong>. <br>';

$telefone = $_REQUEST['Telefone'];
echo 'O telefone informado foi: <strong>' . $telefone . '</strong><br><br>';

echo "Obrigado por entrar em contato! Aguarde nosso retorno.<br>";

?>