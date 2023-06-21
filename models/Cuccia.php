<?php
class Cuccia extends Product{
    
    public $dimensione;

    public function __construct($nome, $prezzo, Categoria $categoria, $img,  $dimensione)
    {
        parent::__construct($nome, $prezzo, $categoria, $img);
        $this->dimensione = $dimensione;
    }    
}

?>