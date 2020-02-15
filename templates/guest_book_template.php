<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guest Book</title>
</head>
<body>
<h1>Guest book</h1>
<?php foreach ($comments as $comment) { ?>
    <article>
        <?php echo $comment['text'] ?> <br>
        <em> <?php echo $comment['author'] ?><br></em>
    </article>
    <hr>
<?php } ?>
</body>
</html>