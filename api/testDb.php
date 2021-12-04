<?php

include 'getUser.php';

//$q = "INSERT INTO users (`name`, `phone`, `email`, street, home, part, appt, floor, comment, payment, callback)
//        VALUES ('Andrey', '89092736582', 'Skilful93@mail.ru', 'Okskaya', '1', '1', '12', '3', 'порой глючит домофон', '1', '1')";
//
//$db = Db::getInstance();
//$ret = $db->exec($q);
//var_dump($ret);
//echo "<pre>";
//var_dump($db->lastInsertId());
//echo "<pre>";
//var_dump($db->getLog());


//$q = "SELECT * FROM users WHERE id < 5";
//
//$db = Db::getInstance();
//$ret = $db->fetchAll($q);
//var_dump($ret);
//echo "<pre>";
//var_dump($db->lastInsertId());
//echo "<pre>";
//var_dump($db->getLog());

$q = "SELECT * FROM users WHERE id = 2";

$db = Db::getInstance();
$ret = $db->fetchOne($q);
var_dump($ret);
echo "<pre>";
var_dump($db->lastInsertId());
echo "<pre>";
var_dump($db->getLog());



