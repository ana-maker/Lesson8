<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modicine</title>
</head>
<body>
<h1><em>Welcome to Modicine</em></h1>
<?php foreach ($records as $record) { ?>
    <article>
        <?php echo $record['text'] ?>
    </article>
<?php } ?>
<hr>
<b><a href="/controller/guestBook.php">To guest book </a></b><br>
<b><a href="/controller/photoGallery.php">To photo gallery</a></b><br>
<b><a href="/controller/adminPanel.php">To admin panel</a></b>
<p>
    <br> <img src="/images_MP/123.jpg" width="850" height="350" alt="Medicine">
</p>
<b><a href="/controller/autentification.php">Autentification</a></b>
</body>
</html>

