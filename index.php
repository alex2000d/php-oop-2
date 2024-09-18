<?php
  // creo la mia classe articolo che sarà la mia classe padre 
class Articolo {
    public $titolo;
    public $prezzo;

    public function __construct($_titolo, $_prezzo) {
        $this->titolo = $_titolo;
        $this->prezzo = $_prezzo;
    }
}

// creo la mia classe categoria 
class Categoria {
    public $nome;
    public $icona;

    public function __construct($nome, $icona) {
        $this->nome = $nome;
        $this->icona = $icona;
    }
}
// creo la classe tipo di articolo
class TipoArticolo {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }
}

// Creo la mia classe prodotto che sara figlia di articolo ed erediterà qualcosa dal padre
class Prodotto extends Articolo {
    public $immagine;
    public $categoria;
    public $tipoArticolo;

    public function __construct($titolo, $prezzo, $immagine, $categoria, $tipoArticolo) {
        // Richiamo le proprietà del genitore 
        parent::__construct($titolo, $prezzo); 
        $this->immagine = $immagine;
        $this->categoria = $categoria;
        $this->tipoArticolo = $tipoArticolo;
    }
}

// Creo le mie categorie
$categoriaCani = new Categoria("Cagnolini","cani");
$categoriaGatti = new Categoria("Gattini","gatti");

// Creo i tipi di articoli
$tipoCibo = new TipoArticolo("Cibo");
$tipoGioco = new TipoArticolo("Gioco");
$tipoCuccia = new TipoArticolo("Cuccia");

// creo le istanze
$prodotto1 = new Prodotto("Crocchette per Cani", 25.99, "crocchette_cani.jpg", $categoriaCani, $tipoCibo);
$prodotto2 = new Prodotto("Palla per Gatti", 10.50, "palla_gatti.jpg", $categoriaGatti, $tipoGioco);

// visualizzo i miei prodotti a schermo
// var_dump($prodotto1);
// var_dump($prodotto2);

// creo il mio arrey con i prodotti da visualizzare
$prodotti = [
    $prodotto1,
    $prodotto2
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>E-commerce</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Cats & Dogs world</h1>
            <p class="text-center">qui puoi trovare tutto ciò che hai bisogno per i tuoi amici pelosetti</p>
        </div>
    </div>
    <div class="row mt-5">
        <?php foreach ($prodotti as $prodotto): ?>
            <div class="col-12 col-lg-4">
                <div class="card">
                    <img src="img/<?= $prodotto->immagine; ?>" class="card-img-top" alt="<?= $prodotto->titolo; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $prodotto->titolo; ?></h5>
                        <p class="card-text">Prezzo: €<?= $prodotto->prezzo; ?></p>
                        <p class="card-text">Categoria: <?= $prodotto->categoria->icona; ?> <?= $prodotto->categoria->nome; ?></p>
                        <p class="card-text">Tipo di articolo: <?= $prodotto->tipoArticolo->nome; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>