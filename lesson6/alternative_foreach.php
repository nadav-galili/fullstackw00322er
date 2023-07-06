<?php

$data = array(10, 20 , 'hi', 65,);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach($data as $item):?>
    <h3> <?= $item;?></h3>
    <?php endforeach;?>
</body>

</html>