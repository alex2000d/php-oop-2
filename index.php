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
$categoriaCani = new Categoria("Cani", 'https://fontawesome.com/icons/dog?f=classic&s=solid');
$categoriaGatti = new Categoria("Gatti", "https://fontawesome.com/icons/cat?f=classic&s=solid");

// Creo i tipi di articoli
$tipoCibo = new TipoArticolo("Cibo");
$tipoGioco = new TipoArticolo("Gioco");
$tipoCuccia = new TipoArticolo("Cuccia");

// creo le istanze
$prodotto1 = new Prodotto("Crocchette per Cani", 25.99, "crocchette_cani.jpg", $categoriaCani, $tipoCibo);
$prodotto2 = new Prodotto("Palla per Gatti", 10.50, "palla_gatti.jpg", $categoriaGatti, $tipoGioco);

// visualizzo i miei prodotti a schermo
var_dump($prodotto1);
var_dump($prodotto2);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    
</body>
</html>