<?php


class First_package extends \Monolog\Logger
{

    public function hey(){
        echo '<h1>HEY!</h1>';
        \Monolog\Logger::ALERT;
    }
}