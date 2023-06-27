<?php
    // DEFININDO O FUSO HORÁRIO:
    date_default_timezone_set('America/Sao_Paulo');
    
    // CONEXÃO COM A BASE DE DADOS: verifique sempre o dbname
    try{
        $pdo = new PDO("mysql:dbname=spring_shop_cadastro;host=localhost;charset=utf8","root","");
    }
    catch(PDOException $erro)
    {
        echo("ERRO NA CONEXÃO: <br>".$erro->getMessage());
    }

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
    include("conecta2.php");
    include("crud2.php");

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $conf_senha = $_POST["conf_senha"]


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
            header("Location: cadastro.html");
        }
    }
?>    