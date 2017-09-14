<?php

function Auth(){
    return App\Services\Auth::instance();
}

function DB(){
    return App\Services\DB::instance();
}
