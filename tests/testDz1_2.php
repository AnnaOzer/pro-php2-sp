<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 03.02.2016
 * Time: 17:13
 */
?>


<h1>Добавьте к методам execute() и query() еще по одному аргументу - массив подстановок.<br>
    Протестируйте работу новых методов.</h1>
<?php

require __DIR__ . '/../autoload.php';

use App\Db;

$db = new Db();

// работоспособность метода execute() без подстановок

$res1 = $db->execute('CREATE TABLE `dz1_2` (
    `id` SERIAL,
    `art` CHAR(10) UNIQUE,
    `name` VARCHAR(255));');

var_dump($res1); //bool(true) первый раз; создана таблица dz1_2 в базе данных

// работоспособность метода execute() с подстановками

$param =[':art'=>'1358064', ':name'=>'Стол'];

$res2 = $db->execute('INSERT INTO dz1_2 (art, name) VALUES (:art, :name);', $param);

var_dump($res2); // bool(true), в таюлицу dz1_2 вставлена строка  - артикул 1358064, название Стол

