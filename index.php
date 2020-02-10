<?php
require __DIR__ .'/classes/GuestBook.php';
require __DIR__ .'/classes/View.php';

$guestBook = new GuestBook(__DIR__ .'/Data.txt');
$records = $guestBook->getData();
$view = new View();
$view->assign('records',$records);
$view->display(__DIR__.'/templates/guest_book_template.php');
