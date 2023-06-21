<?php
class Gioco extends Product{

    public $info;

    public function __construct($nome, $prezzo, Categoria $categoria, $img,  $info)
    {
        parent::__construct($nome, $prezzo, $categoria, $img);
        $this->info = $info;
    }
}

?>