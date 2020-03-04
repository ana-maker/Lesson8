<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
</head>
<body>
<h1>Welcome to admin panel</h1>
<?php
foreach ($news as $article) { ?>
    <article>
        <h2><?php echo $article->title; ?> </h2>
        <?php echo $article->content; ?>
        <hr>
        <form action="/controller/update.php?id=<?php echo $article->id ?>" method="post">
            <textarea cols="35" rows="3" name="title"></textarea>
            <textarea cols="35" rows="3" name="content"></textarea>
            <p><input type="submit" value="Update">
        </form>
        <hr>
        <a target="_blank" href="/controller/delete.php?id=<?php echo $article->id ?>">Delete</a>
        <a target="_blank" href="/controller/update.php?id=<?php echo $article->id ?>">Update</a>
        <hr>
    </article>
<?php } ?>
<form action="/controller/insert.php" method="post">
    <textarea cols="35" rows="3" name="title"></textarea>
    <textarea cols="35" rows="3" name="content"></textarea>
    <p><input type="submit" value="Insert">
</form>
</body>
</html>