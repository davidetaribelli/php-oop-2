<?php
class Cibo extends Product
{
    public $gusto;

    public function __construct($nome, $prezzo, Categoria $categoria, $img,  $gusto)
    {
        parent::__construct($nome, $prezzo, $categoria, $img);
        $this->gusto = $gusto;
    }

    public function getGusto(){
        return $this->gusto;
    }

    public function setGusto($value){
        $this->gusto = $value;
    }
}
