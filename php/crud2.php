<?php
include("conecta2.php");
/*para pegar o texto dos inputs*/ 
    $nome = $_POST["nome"]; 
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $conf_senha = $_POST["conf_senha"]


$comando = $pdo->prepare("INSERT INTO cadastro VALUES ('$nome', '$email', '$senha', '$conf_senha')");
$resultado = $comando->execute();
/*para voltar no formulario*/ 
header("Location: cadastro.html");

?>
