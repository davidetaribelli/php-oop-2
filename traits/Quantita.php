<?php
trait Quantita{
    private $quantita;

    public function getQuantita(){
        return $this->quantita;
    }

    public function setQuantita($value){
        $this->quantita = $value;
    }
}
?>