<?php


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
        <!-- <?php for($i=50; $i>=30;$i-=5):?>
        <?php if($i !=40):?>
        <li>Item <?= $i?></li>
        <?php endif;?>
        <?php endfor;?> -->


        <?php for($i=50; $i>=30;$i-=5):?>
        <?php if($i == 40) continue;?>
        <li>Item <?= $i?></li>
        <?php endfor;?>



    </ul>

</body>

</html>