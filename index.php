<?php 
require_once __DIR__ . '/Models/categories.php';
require_once __DIR__ . '/Models/products.php';

$prod = new Categories("url_example", "Cibo per cani", 19.99, "cibo", "dog");

$prod -> getUrl_img();
$prod -> getTitle();
$prod -> getPrice();
$prod -> getProd_type();
$prod -> getAnimal();

var_dump($prod);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>