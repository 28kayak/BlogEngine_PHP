<?php
/**
 * Created by PhpStorm.
 * User: kaya
 * Date: 8/20/16
 * Time: 3:20 PM
 */
function isUser($username, $password)
{

    $varidity = false;
    $query = 'select username, password from Users where username ='.$username." AND password =". $password ;
    return $varidity;
}




?>