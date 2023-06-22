<?php

require_once __DIR__ . '/../traits/Quantita.php';
require_once __DIR__ . "/Categoria.php";
class Product{

    use Quantita;

    public $nome;
    public $prezzo;
    public $categoria;
    public $img;

    public function __construct($nome, $prezzo, Categoria $categoria, $img)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;   
        $this->categoria = $categoria;
        $this->img = $img;
    }
}

?>