<?php
require __DIR__ . '/models/Product.php';
require __DIR__ . '/models/Categoria.php';
require __DIR__ . '/models/Cibo.php';
require __DIR__ . '/models/Gioco.php';
require __DIR__ . '/models/Cuccia.php';

$categoriaGatto = new Categoria('Gatto');
$categoriaCane = new Categoria('Cane');

$collare = new Product('Collare', '17.99', $categoriaCane, 'https://m.media-amazon.com/images/I/71yjNFYjrqL._AC_SL1500_.jpg');
$croccantiniCaneSalmone = new Cibo('Croccantini al salmone', '12.99', $categoriaCane, 'https://arcaplanet.vtexassets.com/arquivos/ids/252561-1800-1800/Hi-Fish-Dog-Fresco-Adult-salmone--2-.jpg?v=1773753627&quality=1&width=1800&height=1800', 'Salmone');
$croccantiniGattoPollo = new Cibo('Croccantini al pollo', '18.15', $categoriaGatto, 'https://arcaplanet.vtexassets.com/arquivos/ids/274695-1800-1800/premiere-meat-menu-sensitive-per-gatto-adult-con-pollame-2kg.jpg?v=1773737613&quality=1&width=1800&height=1800', 'Pollo');
$pallinaDaTennis = new Gioco('Pallina da tennis', '1.99', $categoriaCane, 'https://arcaplanet.vtexassets.com/arquivos/ids/222727-1800-1800/trixie-cane-palla-tennis.jpg?v=1773706468&quality=1&width=1800&height=1800', 'non abrasivo, non danneggia denti e gengive');
$cucciaPerGatti = new Cuccia('Cuccia grotta per gatto', '29.95', $categoriaGatto, 'https://arcaplanet.vtexassets.com/arquivos/ids/272899-1800-1800/trixie-cuccia-per-gatto-grotta.jpg?v=1773533634&quality=1&width=1800&height=1800', '43 X 35 X 35 CM.');


$arrayProduct = [$collare, $croccantiniCaneSalmone, $croccantiniGattoPollo, $pallinaDaTennis, $cucciaPerGatti];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
    img{
        width: 50%;
        height: 50%;
        object-fit: contain;
    }
</style>
<body>
    <div class="container">
        <h1>
            Vendita di prodotti per i tuoi amici animali
        </h1>
        <div class="row">
            <div class="col-12 d-flex">

                <?php foreach ($arrayProduct as $product) { ?>
                    <div class="card mx-3" style="width: 18rem;">
                        <img src="<?php echo $product->img ?>" class="card-img-top" alt="img">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?php echo $product->nome; ?></li>
                            <li class="list-group-item"><?php echo $product->prezzo . " $"; ?></li>
                            <li class="list-group-item"><?php echo $product->categoria; ?></li>
                            <li class="list-group-item"><?php echo $product->info; ?></li>
                        </ul>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>