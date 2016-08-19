<?php
/**
 * Created by PhpStorm.
 * User: kaya
 * Date: 8/18/16
 * Time: 5:52 PM
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog";
//make connection to DB
$db_conn = new mysqli();
$conn = new mysqli($servername, $username, $password, $dbname);
//Check Connection
if($conn->connect_error)
{
    die("Connection Failed: " . $conn->connect_error);
}
else{
    echo "Connection Success!!";
}

?>