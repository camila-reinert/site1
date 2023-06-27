<?php
session_start();

// Verifica se o carrinho já existe na sessão
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = array();
}

// Verifica se o produto foi enviado através do formulário
if (isset($_POST['produto'])) {
    // Obtém as informações do produto do formulário
    $produto = $_POST['produto'];

    // Adiciona o produto ao carrinho
    $_SESSION['carrinho'][] = $produto;

    // Redireciona de volta para a página do produto ou para o carrinho
    header('Location: camisetas.html');
    exit();
}
?>
<form method="post" action="adicionar_ao_carrinho.php">
    <input type="hidden" name="produto" value="id">
    <input type="submit" value="Adicionar ao Carrinho">
</form>