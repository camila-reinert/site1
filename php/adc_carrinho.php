<?php
include("../php/conectacarrinho.php");
session_start();
if (isset($_SESSION['spring_shop_carrinho'][$id_produto])) {
    $_SESSION['spring_shop_carrinho'][$id_produto]['quantidade']+=$quantidade;
} else {
    $_SESSION['spring_shop_carrinho'][$id_produto]=array(
        'quantidade' => $quantidade,
        'preco' => $preco,
        'nome' => $nome
    );
}
?>


 $comando = $pdo->prepare("SELECT * FROM filiais");
 $resultado = $comando->execute();

 while( $linhas = $comando->fetch()){
 $nome = $linhas["nome"];
 $endereco = $linhas["endereco"];
 $imagem = $linhas["imagem_filial"];
 $i = base64_encode($imagem);
$id = $linhas["id_filial"];

 echo("
 <a href='vermais.php?id_filial=".$id."' class='cardBarbearia'>
<img src='data:image/jpeg;base64," . $i . "' class='imgCard'>
 <article>
 <h3>
 $nome 
 </h3>

 <p>
 $endereco
 </p>
 </article>
 </a>
 ");
 }
?>

