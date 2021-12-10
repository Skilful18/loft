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
$orderId = 0;

if($user) {
    $userId = $user['id'];
    $burger->incOrders($userId);
    $order = $burger->getOrderById($userId);
    $orderId = $order['orders_count'] + 1;
} else {
    $orderId = 1;
    $userId = $burger->createUser($email, $name);
    $order = $burger->getOrderById($userId);
}
$orderNumber = $burger->addOrder($userId, $data);

//$array = [
//    'user_id' => $userId,
//    'address' => $address,
//    'id' => $orderId,
//    'orders_count' => $orderNumber
//];

echo "Спасибо, ваш заказ будет доставлен по адресу: $address . '<br>'
        Номер вашего заказа: $orderNumber . '<br>'
        Это ваш $orderId-й заказ!";

//header('Content-type: application/json');
//echo json_encode($array);

