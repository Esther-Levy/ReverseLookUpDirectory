<?php
require_once  __DIR__ . '/../../config/Db.php';
class AddUserModel
{
    public static function addUser($lastName, $numberPhone)
    {
        $insert = true;
        try {
            $db = Db::getInstance();
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $sth = $db->prepare('INSERT INTO user (nameUser, phoneUser) VALUES (?, ?)');
            $sth->bindParam(1, $lastName, \PDO::PARAM_STR, 50);
            $sth->bindParam(2, $numberPhone, \PDO::PARAM_STR, 10);
            $sth->execute();
        } catch (\PDOException $e)  {
            $insert = false;
            return $insert;
            die();
        }
        return $insert;
    }

    public static function checkPhone($numberPhone)
    {
        $result =true;
        try {
            $db = Db::getInstance();
            $sth = $db->prepare('SELECT idUser FROM user WHERE phoneUser = :phoneUser');
            $sth->bindParam(':phoneUser', $numberPhone, \PDO::PARAM_STR, 10);
            $sth->execute();
            $result = $sth->fetchColumn();
        } catch (\PDOException $e)  {
            $result = false;
            return $result;
            die();
        }
        return $result;
    }
}