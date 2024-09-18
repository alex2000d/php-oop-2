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