<?php 
$amount = filter_input(INPUT_POST, 'amount');
define('EUR_CZK', 27);
$sub = filter_input(INPUT_POST, 'odeslat');
$switch =  filter_input(INPUT_POST, 'switch');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if (isset($sub)) {
    if ($switch == 'eur_czk') { ?>
        <?= $amount ?> Eur je <?= $amount * EUR_CZK ?> Kč
        <?php
    } elseif ($switch == 'czk_eur') { ?>
        <?= $amount ?> Kč je <?= $amount / EUR_CZK ?> Eur
        <?php
    }


} else { ?>
    <form action="index.php" method="post">
        <input type="text" name="amount" id="amount"> <br>
        CZK to EUR: <input type="radio" name="switch" value="czk_eur" id="switch"><br>
        EUR to CZK: <input type="radio" name="switch" value="eur_czk" id="switch"><br>
        <input type="submit" value="odeslat" name="odeslat">
    </form>
<?php
} ?>



</body>
</html>