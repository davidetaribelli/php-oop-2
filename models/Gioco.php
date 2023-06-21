<?php
class Gioco extends Product{

    public $materiale;

    public function __construct($nome, $prezzo, Categoria $categoria, $img,  $materiale)
    {
        parent::__construct($nome, $prezzo, $categoria, $img);
        $this->materiale = $materiale;
    }
}

?>