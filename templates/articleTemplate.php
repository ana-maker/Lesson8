<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$request = $_GET['id'];
foreach ($dataFromDB as $article) {
    if ($request === $article['id']) {
        ?>
        <article>
            <b>  <?php echo $article['Header']; ?> </b> <br>
            <em> Author: <?php echo $article['Author']; ?></em><br>
            <?php echo $article['Text']; ?><br>
            <?php break; ?>
            <hr>
        </article>
    <?php }

}
?>
</body>
</html>