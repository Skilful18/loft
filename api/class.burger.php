<?php

class Burger
{

    public function getUserByEmail(string $email)
    {
        $db = Db::getInstance();
        $query = "SELECT * FROM users WHERE email = :email";
        return $db->fetchOne($query, __METHOD__, [':email' => $email]);
    }

    public function getOrderById(int $userId)
    {
        $db = Db::getInstance();
        $query = "SELECT * FROM orders WHERE user_id = $userId";
        return $db->fetchOne($query, __METHOD__);
    }

    public function createUser(string $email, string $name)
    {
        $db = Db::getInstance();
        $query = "INSERT INTO users (email, `name`) VALUES (:email, :name)";
        $result = $db->exec($query, __METHOD__, [
            ':email' => $email,
            ':name' => $name
        ]);
        if(!$result) {
            return false;
        }

        return $db->lastInsertId();
    }

    public function addOrder(int $userId, array $data)
    {
        $db = Db::getInstance();
        $query = "INSERT INTO orders (user_id, address, created_at, orders_count) VALUES (:user_id, :address, :created_at, :orders_count)";
        $result = $db->exec(
            $query,
            __METHOD__,
            [
                ':user_id' => $userId,
                ':address' => $data['address'],
                ':created_at' => date('Y-m-d H:i:s'),
                ':orders_count' => 0
            ]);
        if(!$result) {
            return false;
        }
        return $db->lastInsertId();
    }

    public function incOrders(int $userId)
    {
        $db = Db::getInstance();
        $query = "UPDATE orders SET orders_count = orders_count + 1 WHERE user_id = $userId";
        return $db->exec($query, __METHOD__);
    }
}