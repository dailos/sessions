<?php
/**
 * Created by PhpStorm.
 * User: dailos
 * Date: 03.09.17
 * Time: 22:43
 */

namespace App\Controllers;


use App\Repositories\UserRepository;

class AuthController
{
    protected $userRepo;
    public function __construct()
    {
        $this->userRepo = new UserRepository();
    }

    public function loginForm()
    {
        include 'resources/views/auth/login.php';
    }

    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = $this->userRepo->findByUsername($username);
        if($user['password'] == md5($password))
        {
            Auth()->login($user);
        }
        header('Location: /');


    }

    public function logout()
    {
        Auth()->logout();
        header('Location: /');
    }
}