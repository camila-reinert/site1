<?php
$products = include 'produto1.html';

foreach ($products as $product) {
    echo '<li>' . $product['name'] . ' - R$' . $product['price'] . ' <a href="cart.php?action=add&id=' . $product['id'] . '">Adicionar ao carrinho</a></li>';
}
?>