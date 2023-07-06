<?php

$currencies = ['Dollar', 'Shekel', 'Yen', 'Bitcoin'];
$len = count($currencies);
$x = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <select>
        <option value="">Please choose Currencie</option>
        <?php while ($x < $len) :?>
        <option value=""> <?= $currencies[$x++];?></option>
        <? endwhile;?>
    </select>
</body>

</html>