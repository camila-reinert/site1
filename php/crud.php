<?php
include("conecta.php");
/*para pegar o textpo dos inputs*/ 
$email = $_POST["email"];
$senha = $_POST["senha"];


$comando = $pdo->prepare("INSERT INTO login VALUES ('$email', '$senha')");
$resultado = $comando->execute();
/*para voltar no formulario*/ 
header("Location: login.html");

?>
