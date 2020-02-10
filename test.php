<?php
$dsn = 'mysql:host=localhost;dbname=tester';
$dbh = new PDO ($dsn,'root','');
$str = 'SELECT * FROM news';
$sth = $dbh->prepare ($str);
$sth->execute ();
var_dump($sth->fetchAll());