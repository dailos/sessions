<?php
/**
 * Created by PhpStorm.
 * User: dailos
 * Date: 03.09.17
 * Time: 23:03
 */

namespace App\Controllers;


class HomeController
{

    public function index()
    {
        if(Auth()->user())
        {
            echo "logeado :";
            var_dump(Auth()->user());
        }else {
            echo "no logeado";
        }
    }
}