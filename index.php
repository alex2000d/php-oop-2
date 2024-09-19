<?php

require_once 'models/prodotto.php';
require_once 'models/categoria.php';
require_once 'models/tipoArticolo.php';
require_once 'models/articolo.php';
require_once 'models/InvalidProductException.php';

// Creo le mie categorie
$categoriaCani = new Categoria("Cagnolini", "Cani");
$categoriaGatti = new Categoria("Gattini", "Gatti");

// Creo i tipi di articoli
$tipoCibo = new TipoArticolo("Cibo");
$tipoGioco = new TipoArticolo("Gioco");
$tipoCuccia = new TipoArticolo("Cuccia");

//  creo un array vuoto per i prodotti
$prodotti = [];

try {
    // istanze per i prodotti
    $prodotti = [
        new Prodotto("Crocchette per Cani", 25.99, "img/crocchette_cani.jpg", $categoriaCani, $tipoCibo),
        new Prodotto("Palla per Gatti", 10.50, "img/palla_gatti.jpg", $categoriaGatti, $tipoGioco),
        new Prodotto("Cuccia per Cani", -50.00, "img/cuccia_cani.jpg", $categoriaCani, $tipoCuccia),
    ];
} catch (InvalidProductException $e) {
    // creo l'eccezione 
    echo "<p class='text-danger'>Errore nella creazione dei prodotti: " . $e->getMessage() . "</p>";
} catch (Exception $e) {
    
    echo "<p class='text-danger'>Errore generico: " . $e->getMessage() . "</p>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>E-commerce</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Cats & Dogs World</h1>
            <p class="text-center">Tutto per i tuoi amici pelosetti</p>
        </div>
    </div>
    <div class="row mt-5">
        <?php if (!empty($prodotti)): ?>
            <?php foreach ($prodotti as $prodotto): ?>
                <div class="col-12 col-lg-4">
                    <div class="card mb-5">
                        <img src="<?= $prodotto->immagine ?>" class="card-img-top" alt="<?= $prodotto->titolo ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $prodotto->titolo ?></h5>
                            <p class="card-text">Prezzo: €<?= $prodotto->prezzo ?></p>
                            <p class="card-text">Categoria: <?= $prodotto->categoria->icona ?> <?= $prodotto->categoria->nome ?></p>
                            <p class="card-text">Tipo di articolo: <?= $prodotto->tipoArticolo->nome ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-warning"> prodotto non disponibile.</p>
        <?php endif; ?>
    </div>
</div>
</body>
</html>
