<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 31.01.2016
 * Time: 17:47
 */
require __DIR__ . '/autoload.php';


$users=\App\Models\User::findAll();
var_dump($users);
/*конец урока 1*/
