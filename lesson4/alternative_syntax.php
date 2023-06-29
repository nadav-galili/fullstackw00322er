<?php

$title = 'My Title';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php if(!empty($title)):?>
        <h2><?=$title ?></h2>
        <?php else : ?>
        <p>no data...</p>
        <?php endif;?>



        <?php if(!empty($title)){?>
        <h2><?=$title?></h2>
        <?php }else{?>
        <p>no data...</p>
        <?php }?>


    </div>

</body>

</html>