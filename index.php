<?php
require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Categoria.php';
require_once __DIR__ . '/models/Cibo.php';
require_once __DIR__ . '/models/Gioco.php';
require_once __DIR__ . '/models/Cuccia.php';

$categoriaGatto = new Categoria('Gatto', 'fa-dog');
$categoriaCane = new Categoria('Cane', 'fa-cat');

$arrayProduct = [
    new Product('Collare', '17.99', $categoriaCane, 'https://m.media-amazon.com/images/I/71yjNFYjrqL._AC_SL1500_.jpg'),
    new Cibo('Croccantini al salmone', '12.99', $categoriaCane, 'https://arcaplanet.vtexassets.com/arquivos/ids/252561-1800-1800/Hi-Fish-Dog-Fresco-Adult-salmone--2-.jpg?v=1773753627&quality=1&width=1800&height=1800', 'Salmone'),
    new Cibo('Croccantini al pollo', '18.15', $categoriaGatto, 'https://arcaplanet.vtexassets.com/arquivos/ids/274695-1800-1800/premiere-meat-menu-sensitive-per-gatto-adult-con-pollame-2kg.jpg?v=1773737613&quality=1&width=1800&height=1800', 'Pollo'),
    new Gioco('Pallina da tennis', null, $categoriaCane, 'https://arcaplanet.vtexassets.com/arquivos/ids/222727-1800-1800/trixie-cane-palla-tennis.jpg?v=1773706468&quality=1&width=1800&height=1800', 'non abrasivo, non danneggia denti e gengive'),
    new Cuccia('Cuccia grotta per gatto', 'ccc', $categoriaGatto, 'https://arcaplanet.vtexassets.com/arquivos/ids/272899-1800-1800/trixie-cuccia-per-gatto-grotta.jpg?v=1773533634&quality=1&width=1800&height=1800', '43 X 35 X 35 CM.'),
];

$arrayProduct[0]->setQuantita(76);
$arrayProduct[1]->setQuantita(20);
$arrayProduct[2]->setQuantita(13);
$arrayProduct[3]->setQuantita(99);
$arrayProduct[4]->setQuantita(1);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center">
        <h1 class="my-5">
            Vendita di prodotti per i tuoi amici animali
        </h1>
        <div class="row">
            <div class="col-12 d-flex">
                <?php foreach ($arrayProduct as $product) { ?>
                    <div class="card text-bg-dark mx-3" style="width: 15rem;">
                        <img src="<?php echo $product->img ?>" class="card-img-top" alt="img">
                        <ul class="list-group list-group-flush">
                            <li class="text-bg-dark list-group-item"><?= $product->nome; ?></li>
                            <li class="text-bg-dark list-group-item">
                                Prezzo: <?php
                                        try {
                                            echo $product->getPrezzo();
                                        } catch (Exception $e) {
                                            echo "non disponibile perchè " . $e->getMessage();
                                        }
                                        ?>
                            </li>
                            <li class="text-bg-dark list-group-item">Categoria: <i class="fa-solid <?= $product->categoria->icona ?>"></i></li>
                            <li class="text-bg-dark list-group-item">
                                <?php if ($product instanceof Cibo) { ?>
                                    Gusto: <?= $product->getGusto() ?>
                                <?php } else if ($product instanceof Gioco) { ?>
                                    Materiale: <?= $product->getMateriale() ?>
                                <?php } else if ($product instanceof Cuccia) { ?>
                                    Misura: <?= $product->getMisura() ?>
                                <?php } ?>
                            </li>
                            <li class="text-bg-dark list-group-item">
                                Quantità: <?= $product->getQuantita() ?>
                            </li>
                        </ul>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>