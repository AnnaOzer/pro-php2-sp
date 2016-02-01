<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 31.01.2016
 * Time: 17:47
 */
require __DIR__ . '/autoload.php';


$user= new \App\Models\User();
$users=$user->findAll();
var_dump($users);

