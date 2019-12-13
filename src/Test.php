<?php

class First_package extends \Monolog\Logger
{

    public function hey($message = 'some text.'){
        echo '<h1>Levels: ';
        foreach(\Monolog\Logger::getLevels() as $key => $value) {
            echo "($key $value) ";
        };
        echo ' ' . $message . '</h1>';
    }
}