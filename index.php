<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 31.01.2016
 * Time: 17:47
 */
require __DIR__ . '/autoload.php';

$db = new \App\Db();

$res = $db->execute('CREATE TABLE `foo` (`id` SERIAL)');// ожидаем true при первом запуске, false при последующих
var_dump($res);

