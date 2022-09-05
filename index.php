<!-- Ecommerce
Classes Products 
            -> Food
            -> Accessories
        User
            -> Registered User
            -> Guest
        PaymentSystem 
            -> Cash
            -> Credit Card
        Traits
            -> Seasonal
        
 -->
<?php
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/Food.php';
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $croccantini = new Food('croccantini',29,0,'dog','22-12-2023','ingrediente1','ingrediente2');
    var_dump($croccantini);

    $prodotto = new Product('antiparassitario',89,0);
    var_dump($prodotto)
    ?>

</body>
</html>