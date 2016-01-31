<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 31.01.2016
 * Time: 17:48
 */

function __autoload($class) {
    require __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
}