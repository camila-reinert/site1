<?php
    // DEFININDO O FUSO HORÁRIO:
    date_default_timezone_set('America/Sao_Paulo');
    
    // CONEXÃO COM A BASE DE DADOS: verifique sempre o dbname
    try{
        $pdo = new PDO("mysql:dbname=spring_shop_login;host=localhost;charset=utf8","root","");
    }
    catch(PDOException $erro)
    {
        echo("ERRO NA CONEXÃO: <br>".$erro->getMessage());
    }


include("conecta.php");
/*para pegar o textpo dos inputs*/ 
$email = $_POST["email"];
$senha = $_POST["senha"];


$comando = $pdo->prepare("INSERT INTO login VALUES ('$email', '$senha')");
$resultado = $comando->execute();
/*para voltar no formulario*/ 
header("Location: login.html");



    include("conecta.php");
    include("crud.php");

    $email = $_POST["email"];
    $senha = $_POST["senha"];


    $n = 0;
    $m = 0;
    while($linhas = $comando->fetch())
    {
        $n = 1;
        $m = 1;
    }
    if($n == 0)
    {
        header("Location: index.html");
    }
    if($n == 1)
    {  
        else
        {
            header("Location: paginainicial.html");
        }
    }

?>