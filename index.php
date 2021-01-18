<?php
include_once __DIR__ . '/classes/Product.php';
include_once __DIR__ . '/classes/Camera.php';
include_once __DIR__ . '/classes/Television.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php OOP</title>
</head>
<body>
    
    <!-- Main header -->
    <header>
        <h1>PRODUCTS SHOP</h1>
    </header>

    <!-- Main section -->
    <main>
        <section>
            <h2>FOTOCAMERA</h2>
            <?php 
                $camera = new Camera('Nikon', 'd3500', 520 , 'AF-S DX NIKKOR 35mm', 350);
            ?>
            <h3>Marca: <?= $camera->brand; ?></h3>
            <h3>Modello: <?= $camera->model; ?></h3>
            <h3>Prezzo scontato: <?= $camera->price - ($camera->price * $camera->setDiscount()); ?>€</h3>
            <h3>Obiettivo zoom: <?= $camera->obz; ?></h3>
            <h3>Peso: <?= $camera->weight; ?> gr</h3>
        </section>

        <section>
            <h2>TELEVISIONE</h2>
            <?php 
                $television = new Television('Samsung', 'NU7400', 710 , 'UHD 4K', 50);
            ?>
            <h3>Marca: <?= $television->brand; ?></h3>
            <h3>Modello: <?= $television->model; ?></h3>
            <h3>Prezzo scontato: <?= $television->price - ($television->price * $television->setDiscount()); ?>€</h3>
            <h3>Risoluzione: <?= $television->ris; ?></h3> 
            <h3>Dimensione: <?= $television->dim; ?> pollici</h3>
        </section>
    </main>
</body>
</html>