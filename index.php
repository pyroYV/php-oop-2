<!-- Ecommerce
Classes Products 
            -> Food
            -> Accessories
        User
            -> Registered User
        PaymentSystem 
            -> Cash
            -> Credit Card
        Traits
            -> Seasonal
        
 -->
<?php
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/Food.php';
require_once __DIR__ . '/classes/Accessory.php';
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/PaymentSystem.php';

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
    $croccantini = new Food('croccantini',29,0,'dog','22-12-2023',['ingrediente1','ingrediente2']);
    $sabbietta = new Food ('sabbietta',100,15,'cats','settembre',['sabbia','antiodore']);
    var_dump($croccantini);
    var_dump($sabbietta);

    $prodotto = new Product('antiparassitario',89,0);
    var_dump($prodotto);

    $utente1 = new User('PaoloCannone22','maildipaolo@paolomail.com',true,[$croccantini,$sabbietta]);
    var_dump($utente1);

    $validCard = new PaymentSystem('credit','55584842684','2022-09-06');
    var_dump($validCard)
    ?>
    <?php
    if($validCard->checkExpirationDate($validCard->getExpireDate())){
        echo 'pagamento possibile per ' . $utente1 -> getUserName();
    };
    ?>
    
    <?php
    $utente1->applyLoggedDiscount();

    echo 'Oggetti del carrello';
    foreach($utente1->getCart() as $item){echo  '<br>'. $item->getName() . '<br>';}

    
    echo 'il totale è ' . ($utente1->calculateCartTotal());
    ?>


</body>
</html>