<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 31.01.2016
 * Time: 20:54
 */

namespace App;


class Db {

    protected $dbh;

    public function __construct()
    {
       $this->dbh = new \PDO('mysql:host=127.0.0.1; dbname=pro-php2-sp', 'root', '');
    }

    public function execute($sql)
    {
        $sth=$this->dbh->prepare($sql); // prepare() возвращает специально подготовленный запрос, т.е. стейтмент
        $res=$sth->execute(); // execute() возвращает true или false
        return $res;
    }

    public function query($sql)
    {
        $sth=$this->dbh->prepare($sql); // подготовили запрос
        $res=$sth->execute(); // выполнили запрос

        if(false!==$res) { // если незультат выполнения запроса не false
            return $sth->fetchAll(\PDO::FETCH_CLASS, 'App\\Models\\User'); // получим все данные выполнения запроса
            // доп. параметры: режим превращения данных, какого класса должны быть объекты
        }

        return []; // в противном случае вернём пустой массив
    }
} 