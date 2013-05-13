<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=UTF-8" />
    <base href="/kohana/"/>
    <title><?php echo $title;?></title>
    <?php foreach($styles as $file => $type) {
        echo HTML::style($file, array('media' => $type)), "\n"; }
    ?>
</head>
<body>
<div class="wrapper">
    <?=$header?>
</div>

<?php foreach($scripts as $file) { echo HTML::script($file, NULL, TRUE), "\n"; }?>
</body>
</html>