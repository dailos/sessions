<?php
/**
 * Created by PhpStorm.
 * User: dailos
 * Date: 03.09.17
 * Time: 23:03
 */

namespace App\Services;


class DB extends Singleton
{
    private $connection = null;

    public function query($sql)
    {
        return $this->getConnection()->query($sql);
    }

    private function getConnection()
    {
        if(!$this->connection) {
            $this->connection = mysqli_connect("localhost", "root", "123", "test");
        }

        return $this->connection;
    }
}