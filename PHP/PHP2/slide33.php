<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phạm Văn Anh-2121050414</title>
</head>

<body>
    <?php
    $exchangeRate = array("USD" => 22300, "EUR" => 27300, "SGD" => 17000);
    $amount = $_GET['amount'];
    $currency = $_GET['currency'];
    echo "$amount USD is equal " . number_format($amount * $exchangeRate[$currency]) . " VND";
    ?>
</body>

</html>