<?php
require_once  __DIR__ . '/../../config/Db.php';

class SearchModel
{
    public static function searchByPhoneNumber($numberPhone)
    {
        $db = Db::getInstance();
        $sth = $db->prepare('SELECT nameUser FROM user WHERE phoneUser = :phoneUser');
        $sth->bindParam(':phoneUser', $numberPhone, \PDO::PARAM_STR, 10);
        $sth->execute();
        $result = $sth->fetchColumn();
        return $result;
    }

    public static function searchByLastName($lastName)
    {
        $db = Db::getInstance();
        $sth = $db->prepare('SELECT phoneUser FROM user WHERE nameUser=:nameUser');
        $sth->bindParam(':nameUser', $lastName, \PDO::PARAM_STR, 50);
        $sth->execute();
        $result = $sth->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

}