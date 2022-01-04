<?php

require_once('../models/ModelProduct.php');
$Product = new Product();

if (isset($_POST['state']) && $_POST['state'] == "new") {
	$Product->createProduct($_POST['name_product'], $_POST['referense'], $_POST['price'], $_POST['weight'], $_POST['category'], $_POST['stock'], $_POST['created_at']);
	header("Location: ../views/new_product.php");
} else if (isset($_POST['state']) && $_POST['state'] == "edit") {
	$id = isset($_POST['id']) ? $_POST['id'] : "";
	if ($id != "") {
		$Product->updateProduct($_POST['name_product'], $_POST['referense'], $_POST['price'], $_POST['weight'], $_POST['category'], $_POST['stock'], $_POST['created_at'], $id);
	}
	header("Location: ../views/edit_product.php?getProduct=" . $id);
} else if (isset($_GET['getProduct'])) {
	$product = $Product->getProductById($_GET['getProduct']);
} else if (isset($_GET['deleteProduct'])) {
	$Product->deleteProductById($_GET['deleteProduct']);
	header("Location: ../views/index.php");
} else {
	$data = $Product->listProducts();
}


$Product->cerrarConexion();
$Product = NULL;
