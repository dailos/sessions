<?php
/**
 * Created by PhpStorm.
 * User: dailos
 * Date: 03.09.17
 * Time: 23:03
 */

namespace App\Services;


class Auth extends Singleton
{
    private $user = null;

    public function initSession()
    {
        session_start();
        if(isset($_SESSION['user'])){
            $this->user = $_SESSION['user'];
        }
    }

    public function login($user)
    {
        $_SESSION['user'] = $user;
    }

    public function logout()
    {
        $this->user = null;
        session_destroy();
    }

    public function user()
    {
        return $this->user;
    }
}