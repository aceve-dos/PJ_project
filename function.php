<?php
error_reporting(E_ALL & ~E_DEPRECATED &E_STRICT);

function escapar($html){
    return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");

}

function scrf(){
    session_write_close();
    session_start();

    if(empty($_SESSION['csrf'])){
        if(function_exists('random_bytes')){
            $_SESSION['csrf'] = bin2hex(random_bytes(32));
        } else if (function_exists('mcrypt_create_iv')){
            $_SESSION['scrf'] = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
        }else{
            $_SESSION['csrf'] = bin2hex(openss1_random_pseudo_bytes(32));
        }
    }

}



?>