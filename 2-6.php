<?php

// 1. Создайте файл test.txt средствами PHP. Поместите в него текст - “Hello again!”

$file = fopen('test.txt', "a");
//echo file_put_contents("test.txt", "Hello again!");

// 2. Напишите функцию, которая будет принимать имя файла, открывать файл и выводить содержимое на экран.

$fp = fopen('test.txt', 'r');

function open($fp)
{
    while (!feof($fp)){
        $str = fgets($fp, 1024);
        echo $str;
    }
}

echo open($fp);

fclose($fp);
