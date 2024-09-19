
<?php

class InvalidProductException extends Exception {
    public function __construct($message) {
        // Passa il mio messaggio alla classe Exception
        parent::__construct($message);
    }
}
