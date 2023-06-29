<?php

$title = '';
$article = 'My paragraph';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="">
        <?php if(!empty($title)):?>
        <h2><?=$title?></h2>
        <?php elseif(!empty($article)):?>
        <p><?=$article?></p>
        <?php else:?>
        <span>no data...</span>
        <?php endif;?>



    </div>


</body>

</html>