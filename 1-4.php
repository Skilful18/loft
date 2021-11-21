<?php

$day = mt_rand(1, 9);

switch($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'Это рабочий день' . "<br>";
        echo $day;
        break;
    case 6:
    case 7:
        echo 'Это выходной день' . "<br>";
        echo $day;
        break;
    default:
        echo 'Неизвестный день' . "<br>";
        echo $day;
        break;
}