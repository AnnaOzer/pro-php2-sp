<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 31.01.2016
 * Time: 20:54
 */

namespace App;


class Db {

    public $dbh;

    public function __construct()
    {
       $this->dbh = new \PDO('mysql:host=127.0.0.1; dbname=pro-php2-sp', 'root', '');
    }
} 