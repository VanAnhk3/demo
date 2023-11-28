<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Pham Van Anh -2121050414</h3>
    <form action=""method=get>
        <p>Amount:</p>
        <input type="number" name="amount">
        <p>Select currency</p>
        <select name="currency">
        <option value="USD">USD</option>
        <option value="EUR">EURO</option>
        <option value="SGP">SINGGAPORE DOLAR</option>
        <option value="JPY">JAPANERSE YEN</option>
        </select>

    <input type="submit"value="Convert">
    </form>
<?php
$exchangeRate = array("USD"=>22300,"EUR"=>27300,"SGP"=>17000,"JPY"=>120);
if (isset($_GET['amount']))
{
    
}
</body>
</html>