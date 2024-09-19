
<?php

require_once 'categoria.php';
require_once 'tipoArticolo.php';
require_once 'articolo.php';
require_once 'InvalidProductException.php';

class Prodotto extends Articolo {
    public $immagine;
    public $categoria;
    public $tipoArticolo;

    public function __construct($titolo, $prezzo, $immagine, $categoria, $tipoArticolo) {
        // Controllo del prezzo negativo
        if ($prezzo < 0) {
            throw new InvalidProductException("il valore del prezzo del tuo prodotto non puo essere negativo: $prezzo");
        }

        // Richiamo il costruttore del genitore
        parent::__construct($titolo, $prezzo);

        $this->immagine = $immagine;
        $this->categoria = $categoria;
        $this->tipoArticolo = $tipoArticolo;
    }
}
