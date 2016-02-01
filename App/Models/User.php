<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 31.01.2016
 * Time: 23:44
 */

namespace App\Models;

use App\Db;
use App\Model;

class User
extends Model {

    const TABLE = 'users';

    public $email;
    public $name;


} 