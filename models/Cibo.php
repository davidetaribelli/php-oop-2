<?php
class Cibo extends Product
{
    public $tipodiCroccantino;

    public function __construct($nome, $prezzo, Categoria $categoria, $img,  $tipodiCroccantino)
    {
        parent::__construct($nome, $prezzo, $categoria, $img);
        $this->tipodiCroccantino = $tipodiCroccantino;
    }
}
