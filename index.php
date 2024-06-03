<?php
require_once __DIR__ . '/Models/categories.php';
require_once __DIR__ . '/Models/products.php';

$products = [];

if (!empty($_POST)) {
    $url_image = $_POST["url_image"];
    $prod_title = $_POST["prod_title"];
    $prod_price = $_POST["prod_price"];
    $prod_typology = $_POST["prod_typology"];
    $prod_animal = $_POST["prod_animal"];

    // Create new product object (optional: add validation here)
    $new_product = new Categories($url_image, $prod_title, $prod_price, $prod_typology, $prod_animal);

    // Add product to array
    array_push($products, $new_product);
}

// $url_image = $_POST["url_image"];
// $prod_title = $_POST["prod_title"];
// $prod_price = $_POST["prod_price"];
// $prod_typology = $_POST["prod_typology"];
// $prod_animal = $_POST["prod_animal"];

// echo $url_image, $prod_title, $prod_price, $prod_typology, $prod_animal;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Inserisci un nuovo prodotto:</h2>
    <form action="index.php" method="POST"> <label for="url_image">URL immagine:</label>
        <input type="text" id="url_image" name="url_image" required>
        <br>

        <label for="prod_title">Nome prodotto:</label>
        <input type="text" id="prod_title" name="prod_title" required>
        <br>

        <label for="prod_price">Prezzo:</label>
        <input type="text" id="prod_price" name="prod_price" required>
        <br>

        <label for="prod_typology">Tipologia:</label>
        <select id="prod_typology" name="prod_typology" required>
            <option value="cibo">Cibo</option>
            <option value="giochi">Giochi</option>
            <option value="accessori">Accessori</option>
        </select>
        <br>

        <label for="prod_animal">Animale:</label>
        <select id="prod_animal" name="prod_animal" required>
            <option value="dog">Cane</option>
            <option value="cat">Gatto</option>
        </select>
        <br>

        <button type="submit">Aggiungi prodotto</button>

    </form>

    <?php

    if (!empty($products)) { ?>
        <h2>Prodotti inseriti:</h2>
        <?php foreach ($products as $prod){?>
            <ul>
                <li>Immagine: <?= $prod->getUrl_img() ?></li>
                <li>Nome: <?= $prod->getTitle() ?></li>
                <li>Prezzo: <?= $prod->getPrice() ?></li>
                <li>Tipologia: <?= $prod->getProd_type() ?></li>
                <li>Animale: <?= $prod->getAnimal() ?></li>
            </ul>
        <?php } ?>
    <?php } ?>

</body>

</html>