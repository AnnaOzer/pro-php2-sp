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
use tests\tcDz1_2;

$db = new Db();

// работоспособность метода execute() без подстановок

$res1 = $db->execute('CREATE TABLE `dz1_2` (
    `id` SERIAL,
    `art` CHAR(10) UNIQUE,
    `name` VARCHAR(255));');

var_dump($res1); //bool(true) первый раз; создана таблица dz1_2 в базе данных

// работоспособность метода execute() с подстановками

$param2 =[':art'=>'1358064', ':name'=>'Стол'];
$res2 = $db->execute('INSERT INTO dz1_2 (art, name) VALUES (:art, :name);', $param2);
var_dump($res2); // bool(true), в таблицу dz1_2 вставлена строка  - артикул 1358064, название Стол

$param3 =[':art'=>'69791459', ':name'=>'Стул'];
$res3 = $db->execute('INSERT INTO dz1_2 (art, name) VALUES (:art, :name);', $param3);
var_dump($res3); // bool(true), в таблицу dz1_2 вставлена строка  - артикул 69791459, название Стул

$param4 =[':art'=>'919851', ':name'=>'Шкаф'];
$res4 = $db->execute('INSERT INTO dz1_2 (art, name) VALUES (:art, :name);', $param4);
var_dump($res4); // bool(true), в таблицу dz1_2 вставлена строка  - артикул 919851, название Шкаф

