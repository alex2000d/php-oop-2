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

?>