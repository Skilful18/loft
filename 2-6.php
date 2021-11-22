<?php

// 1. Создайте файл test.txt средствами PHP. Поместите в него текст - “Hello again!”

$file = fopen('test.txt', "r");
file_put_contents("test.txt", "Hello again!");

// 2. Напишите функцию, которая будет принимать имя файла, открывать файл и выводить содержимое на экран.

function funcOpen($file)
{
    while(!feof($file)){
        $str = fgetc($file);
        echo $str;
    }
}

echo funcOpen($file);

