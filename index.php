<?php 
include_once __DIR__."/classes/Product.php"
?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cani&Gatti E-Commerce</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-xxl text-center">
            <h1>E-Commerce</h1>
                <div class="row">
                    <?php foreach ($allProducts as $singleProduct) {?>
                        <div class="col-4">
                            <div class="card my-3 p-2">
                                <p><strong>Nome prodotto:</strong> <?php echo $singleProduct->getName() ?></p>
                                <p><strong>Categoria:</strong> <?php echo $singleProduct->getCategory()->getName(); echo ' '.$singleProduct->getCategory()->getIcon();?></p>
                                <p><strong>Tipo:</strong> <?php echo $singleProduct->getType() ?></p>
                                <p><strong>Prezzo:</strong> <?php echo $singleProduct->getPrice().' €' ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                
        </div>
    </body>
</html>

<style> 

* {
    margin:0;
    padding:0;
    box-sizing:border-box;
}

p {
    margin:0;
    padding:0;
}

</style>