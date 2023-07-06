<?php


$file_info =[
    'name'=>'install',
    'type'=>'exe',
    'size'=> '225kb',
    'created_at'=>'01/02/2023',

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php foreach($file_info as $index => $value):?>
    <li><?= $index . ':' . $value;?></li>
    <? endforeach;?>
</body>

</html>