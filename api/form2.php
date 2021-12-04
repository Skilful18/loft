<?php

include 'getUser.php';
include 'functions.php';
include 'class.burger.php';

ini_set('display_errors', 'on');
ini_set('error_reporting', E_NOTICE | E_ALL);

$burger = new Burger();

$email = $_POST['email'];
$name = $_POST['name'];
$addressFields = ['phone', 'address', 'home', 'part', 'appt', 'floor'];
$address = '';
foreach ($_POST as $field => $value) {
    if($value && in_array($field, $addressFields)){
        $address .= $value . ',';
    }
}
$data = ['address' => $address];

$user = $burger->getUserByEmail($email);

if($user) {
    $userId = $user['id'];
    $burger->incOrders($user['id']);
    $orderNumber = $user['order_count'] + 1;
} else {
    $orderNumber = 1;
    $userId = $burger->createUser($email, $name);
}

$orderId = $burger->addOrder($userId, $data);

//$array = [
//    'user_id' => $userId,
//    'address' => $address,
//    'id' => $orderId,
//    'orders_count' => $orderNumber
//];

echo "Спасибо, ваш заказ будет доставлен по адресу: $address . '<br>'
        Номер вашего заказа: $orderId . '<br>'
        Это ваш $orderNumber-й заказ!";

//header('Content-type: application/json');
//echo json_encode($array);

