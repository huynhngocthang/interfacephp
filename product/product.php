<?php
$products = json_decode(file_get_contents('product.json')) ;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            height: 200px;
        }
        p {
            padding-left: 4.5%;
        }
    </style>
</head>
<body>
<div class="footer">
    <img src="<?= $products[0]->image?>" alt="" srcset="">
    <img src="<?= $products[1]->image?>" alt="" srcset="">
    <img src="<?= $products[2]->image?>" alt="" srcset="">
    <img src="<?= $products[3]->image?>" alt="" srcset="">

</div>
<div class="dinner">
<p>
    <?= $products[0]->sku ?> 
    <?= $products[1]->sku ?> 
    <?= $products[2]->sku ?> 
    <?= $products[3]->sku ?> 
</p>
</div>

 
</body>

</html>