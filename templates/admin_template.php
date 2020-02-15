<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin panel</title>
</head>
<body>
<h1>Welcome to Admin Panel</h1> <p><a href="/controller/index.php">To Main Page</a></p>
<form method="post" action="/controller/adminPanel.php" enctype="multipart/form-data">
    <b><em>Upload your image :</em></b> <input type="file" name="img"><br>
    <input type="submit" name="submit"><br>
</form>
<hr>
<form method="post" action="/controller/update.php">
    <b> <em>Change records "about"</em></b>
    <p><textarea rows="10" cols="45" name="text"></textarea><br></p>
    <input type="submit" name="change">
</form>
<hr>
<form method="get" action="/controller/delete.php">
    <p><b><em>Delete comments</em></b></p>
    <?php foreach ($comments as $comment) { ?>
        <article>
            <?php echo $comment['text'] ?> <br>
            <em> <?php echo $comment['author'] ?><br></em>
            <a href="/controller/delete.php?id=<?php echo $comment['id'] ?>">Delete</a>
        </article>
        <hr>
    <?php } ?>
</form>
</body>
</body>
</html>