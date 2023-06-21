<?php
class Product{
    public $nome;
    public $prezzo;
    public $categoria;
    public $img;

    public function __construct($nome, $prezzo, Categoria $categoria, $img)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;   
        if ($categoria instanceof Categoria){
            $this->categoria = $categoria-> nome;
        }else{
            die("La categoria deve appartenere alla classe Categoria");
        }
        $this->img = $img;
    }
}

?>