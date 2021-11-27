<?php

require 'src/functions.php';

echo task1();
echo task2();
echo task3();

for($i = 0; $i < 50; $i++) {

    $users[] = task1();

}

//  Преобразуйте массив в json и сохраните в файл users.json

$json = json_encode($users);
file_put_contents('users.json', $json);

// Откройте файл users.json и преобразуйте данные из него обратно ассоциативный массив РНР.

$fp = file_get_contents('users.json');
$decodedUsers = json_decode($fp, true);

//  Посчитайте количество пользователей с каждым именем в массиве
//  Посчитайте средний возраст пользователей

$names = [];
$middle_age = 0;

foreach ($decodedUsers as $user) {
    if(isset($names[$user['name']])) {
        $names[$user['name']]++;
    } else {
        $names[$user['name']] = 1;
    }
    $middle_age += $user['age'] / sizeof($decodedUsers);
}

print_r($middle_age);





