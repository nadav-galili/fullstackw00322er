<?php
 $nums ='10-20-30-55-32-89-10';
 $nums_array = explode('-', $nums);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach($nums_array as $num):?>
        <?php if($num %2 == 0):?>
        <li><?= $num;?></li>
        <?php endif;?>
        <?php endforeach;?>
    </ul>

</body>

</html>