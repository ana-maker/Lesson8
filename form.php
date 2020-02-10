<?php require __DIR__ .'/guest_book/GuestBook.php'; ?>
<html>
<head>
</head>
<body>
<?php
$guestBook = new GuestBook(__DIR__ . '/guest_book/Data.txt');
foreach ($guestBook->getAllRecords() as $record ) { ?>
<article>
    <strong><?php echo $record->getDate()?></strong>

    <?php
    echo $record->getMessage();
    ?>
</article>
    <hr>
<?php }?>
<?php
var_dump($guestBook->getAllRecords());
?>
</body>
</html>