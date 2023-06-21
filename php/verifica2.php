<?php 
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