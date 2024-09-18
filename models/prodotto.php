<?php

require_once 'Articolo.php';  
require_once 'Categoria.php';
require_once 'TipoArticolo.php';

// Creo la mia classe prodotto che sarà figlia di articolo ed erediterà qualcosa dal padre
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