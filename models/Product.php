<?php

require_once __DIR__ . '/../traits/Quantita.php';
require_once __DIR__ . "/Categoria.php";
class Product{

    use Quantita;

    public $nome;
    private $prezzo;
    public $categoria;
    public $img;

    public function __construct($nome, $prezzo, Categoria $categoria, $img)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;   
        $this->categoria = $categoria;
        $this->img = $img;
    }

    public function setPrezzo($value) {
		$this->prezzo = $value;
	}

    public function getPrezzo() {

		if( is_null($this->prezzo) || is_nan($this->prezzo)) {
			throw new Exception("il valore non è numerico");
		}
		return $this->prezzo . " €";
	}

}

?>