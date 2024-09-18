<?php 

require_once 'categoria.php'; 
require_once 'tipoArticolo.php';


// creo la classe tipo di articolo
class TipoArticolo {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }
}
?>