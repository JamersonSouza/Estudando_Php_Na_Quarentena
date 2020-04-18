<?php

    $autoload = function($class){
    if($class == 'Email'){

        require_once('classes/phpmailer/PHPMailerAutoload.php');

    }

        include('classes/'.$class.'.php');
        //echo 'chamou com sucesso';
    };

    spl_autoload_register($autoload);


    define('INCLUDE_PATH', 'http://localhost/PROJETO_1/');
?>
 
