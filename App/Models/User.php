<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 31.01.2016
 * Time: 23:44
 */

namespace App\Models;

use App\Db;

class User {
    public $email;
    public $name;

    public function findAll()
    {
        $db = new Db();
        return $db->query(
            'SELECT * FROM `users`',
            'App\Models\User'
        );
    }
} 