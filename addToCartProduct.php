<?php
include "functions.php";

$productId = $_GET['id'];

if (isset($_GET['parentId'])){
    $parentId = $_GET['parentId'];
} else {
    $parentId = null;
}

$cart = getCurrentCart();

$cart->add($productId, $parentId);

header('Location: index.php');