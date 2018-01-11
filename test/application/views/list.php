<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/1/11
 * Time: 13:37
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <base href="<?php echo site_url()?>">
</head>
<body>
<ul>
    <?php foreach ($list as $user){?>

        <li><?php echo $user->ID.",".$user->name?></li>

    <?php }?>
</ul>
</body>
</html>
