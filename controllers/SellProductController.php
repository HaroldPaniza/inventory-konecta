<?php

require_once('../models/ModelSellProduct.php');
require_once('../models/ModelProduct.php');
$Product = new Product();
$SellProduct = new Sales();

$product = $Product->getProductById($_POST['product_id']);
var_dump($product);
$quantity = $product[0]['stock'];
$quantityProduct = $_POST['quantity_product'];
echo $quantity;
if ($quantity >= $quantityProduct) {
	$SellProduct->createSales($_POST['product_id'], $quantityProduct);
	$SellProduct->updateProduct($quantity - $quantityProduct, $_POST['product_id']);
}

header('Location: ../views/sell_product.php');

$SellProduct->cerrarConexion();
$SellProduct = NULL;
