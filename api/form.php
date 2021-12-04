<?php

include 'getUser.php';

if (isset($_POST["name"]) && isset($_POST["email"]) ) {

    $name = $_POST["name"];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $street = $_POST['street'];
    $comment = $_POST['comment'];
    $payment = (int)$_POST['payment'];
    $callback = (int)$_POST['callback'];

//    if ($email == ''){
//        echo 'Введите email!';
//    } else {

        $db = Db::getInstance();

        // Проверить, существует ли уже пользователь с таким email, если нет - создать его,
        // если да - увеличить число заказов по этому email.
        // Двух пользователей с одинаковым email быть не может.

        $result = "SELECT * FROM users";

        $retT = $db->fetchAll($result);

        $arrayEmail = array_column($retT, 'email');

        if(in_array($email, $arrayEmail)) {
            $q = "UPDATE `users` SET `order` = `order` + 1 WHERE `email` = '$email'";
        } else {
            $q = "INSERT INTO users_orders (user_id, street) VALUES (user_id, '$street')";
        }

        $ret = $db->exec($q);

    //  Сохранить данные заказа - id пользователя, сделавшего заказ, дату заказа, полный адрес клиента.

        //Скрипт должен вывести пользователю:
        //
        //Спасибо, ваш заказ будет доставлен по адресу: “тут адрес клиента”
        //Номер вашего заказа: #ID
        //Это ваш n-й заказ!
        //Где ID - уникальный идентификатор только что созданного заказа n - общий кол-во заказов, который сделал пользователь с этим email включая текущий


//        тебе нужно вытащить данные по айди юзера
//        Через селект
//        У тебя в таблице заказов должен быть user_id
//        Так во всех проектах делается
//        При инсерте, ты туда вставляешь айди юзера и потом нужный тебе заказа вытаскиваешь по этому id
//        Юзер айди сделай и запиши айди юзера при инстерте

        $r = [
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'street' => $street,
            'comment' => $comment,
            'payment' => $payment,
            'callback' => $callback,
            'order' => $q
        ];

        header('Content-type: application/json');
        echo json_encode($r);

//    }

}




