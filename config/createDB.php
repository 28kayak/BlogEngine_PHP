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

    echo "<br>Close DB<br>";
    //$conn->close();

    echo "<br>Reconnect<br>";
    /* change db to world db */
    mysqli_select_db($conn, $dbname);
    if ($conn->connect_error)
    {
        echo "Connection Failed: " . $conn->connect_error;
        die("Connection Failed: ".$conn->connect_error);
    }
    else
    {
        createPost($conn);
        createUser($conn);
        createCategory($conn);
    }

}

echo "<br>Before closing DB<br>";
$conn->close();







function createDB($conn)
{
    $sql = "CREATE DATABASE blog";
    if(mysqli_query($conn,$sql))
    {//query succeed!
        echo "<br>query succeed: createDB()<br>";
    }
    else
    {
        echo "<br>Error description: " . mysqli_error($conn)."<br>";
    }

}

/**
 * @param $conn connction with databse
 */
function createPost($conn)
{
    $sql = "CREATE TABLE Posts(
            post_id INT AUTO_INCREMENT PRIMARY KEY, 
            user_id INT NOT NULL,
            title VARCHAR(150),
            posted_date TIMESTAMP,
            body TEXT, 
            category VARCHAR(150)
          )";
    if(mysqli_query($conn, $sql))
    {
        echo "<br>Query Succeed: createPost()<br>";
    }
    else {
        echo "<br>Error description: " . mysqli_error($conn)."<br>";

    }
}
function createUser($conn){
    $sql = "CREATE TABLE Users(
            user_id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(150) NOT NULL,
            password VARCHAR (150) NOT NULL
            )";
    if(mysqli_query($conn,$sql))
    {
        echo "<br>Query Succeed: createUsers()<br>";
    }
    else{

        echo "<br>Error description: " . mysqli_error($conn)."<br>";
    }
}

function createCategory($conn)
{
    $sql = "CREATE TABLE Category(
            category_id INT AUTO_INCREMENT PRIMARY KEY,
            category VARCHAR(150) NOT NULL 
          )";
    if(mysqli_query($conn,$sql))
    {
        echo "<br>Query Succeed: createCategory()<br>";
    }
    else{

        echo "<br>Error description: " . mysqli_error($conn)."<br>";
    }
}
function connectToDB()
{
    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error)
    {
        echo "Connection Failed: " . $conn->connect_error;
        die("Connection Failed: ".$conn->connect_error);
    }
    else {
        echo "<br>OK to Connect<br>";
    }
    return $conn;
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