<?php
class Cuccia extends Product{
    
    public $misura;

    public function __construct($nome, $prezzo, Categoria $categoria, $img,  $misura)
    {
        parent::__construct($nome, $prezzo, $categoria, $img);
        $this->misura = $misura;
    }
    
    public function getMisura(){
        return $this->misura;
    }

    public function setMisura($value){
        $this->misura = $value;
    }
}

?>