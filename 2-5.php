<?php

// 1. Дана строка: “Карл у Клары украл Кораллы”. Удалить из этой строки все заглавные буквы “К”.

$str = "Карл у Клары украл Кораллы";
$k = "К";

if (strpos($str, $k) !== false) {
    echo str_replace('К', 'к', $str);
} else {
    echo 'ничего не нашел';
}

// 2. Дана строка: “Две бутылки лимонада”. Заменить “Две”, на “Три”.

$str_2 =  "Две бутылки лимонада";
echo '<br>';
echo str_replace('Две', 'Три', $str_2);
