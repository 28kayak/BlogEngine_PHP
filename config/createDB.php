<?php
/**
 * Created by PhpStorm.
 * User: kaya
 * Date: 8/18/16
 * Time: 4:07 PM
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog";

//create connection

$conn = new mysqli($servername, $username, $password);
//check connection
if($conn->connect_error)
{
    echo "Connection Failed: " . $conn->connect_error;
    die("Connection Failed: ".$conn->connect_error);
}
else
{
    echo "<br>OK to Connect<br>";
    echo "<br>Call Create DB<br>";
    createDB($conn);
}
echo "<br>Before closing DB<br>";
$conn->close();


function createDB($conn)
{
    $sql = "CREATE DATABASE blog";
    if(mysqli_query($conn,$sql))
    {//query succeed!
        echo "query succeed";
    }
    else
    {
        echo "Error description: " . mysqli_error($conn);
    }

}

/**
//Create Table
$conn = new mysqli($servername, $username, $password, $dbname);
//Check Connection
if($conn->connect_error)
{
    die("Connection Failed: " . $conn->connect_error);
}
**/
?>