<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 01.02.2016
 * Time: 19:47
 */

namespace App;


class Model {

    const TABLE = '';

    public static function findAll()
    {
        $db = new Db();
        return $db->query(
            'SELECT * FROM' . self::TABLE,
            self::class
        );
    }
} 