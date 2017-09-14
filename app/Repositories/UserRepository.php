<?php
/**
 * Created by PhpStorm.
 * User: dailos
 * Date: 03.09.17
 * Time: 22:18
 */

namespace App\Repositories;


class UserRepository
{
    public function findByUsername($username)
    {
        $result = DB()->query("SELECT * FROM users");
        return $result->fetch_assoc();
    }

}