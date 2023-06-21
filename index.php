<?php
require __DIR__ . '/models/Product.php';
require __DIR__ . '/models/Categoria.php';
require __DIR__ . '/models/Cibo.php';
require __DIR__ . '/models/Gioco.php';
require __DIR__ . '/models/Cuccia.php';

$categoriaGatto = new Categoria('Gatto');
$categoriaCane = new Categoria ('Cane');

$collare = new Product('Collare', '17.99', $categoriaCane, 'https://m.media-amazon.com/images/I/71yjNFYjrqL._AC_SL1500_.jpg');
$croccantiniCaneSalmone('Croccantini al salmone', '12.99', $categoriaCane, 'https://arcaplanet.vtexassets.com/arquivos/ids/252561-1800-1800/Hi-Fish-Dog-Fresco-Adult-salmone--2-.jpg?v=1773753627&quality=1&width=1800&height=1800', 'Salmone');
$croccantiniGattoPollo('Croccantini al pollo', '18.15', $categoriaGatto, 'https://arcaplanet.vtexassets.com/arquivos/ids/274695-1800-1800/premiere-meat-menu-sensitive-per-gatto-adult-con-pollame-2kg.jpg?v=1773737613&quality=1&width=1800&height=1800', 'Pollo');
$pallinaDaTennis('Pallina da tennis', '1.99', $categoriaCane, 'https://arcaplanet.vtexassets.com/arquivos/ids/222727-1800-1800/trixie-cane-palla-tennis.jpg?v=1773706468&quality=1&width=1800&height=1800', 'non abrasivo, non danneggia denti e gengive');
$cucciaPerGatti('Cuccia grotta per gatto', '29.95', $categoriaGatto, 'https://arcaplanet.vtexassets.com/arquivos/ids/272899-1800-1800/trixie-cuccia-per-gatto-grotta.jpg?v=1773533634&quality=1&width=1800&height=1800', '43 X 35 X 35 CM.');


$arrayProduct = [$collare, $croccantiniCaneSalmone, $croccantiniGattoPollo, $pallinaDaTennis, $cucciaPerGatti];

var_dump($arrayProduct);
?>
