<?php
/**
 * Created by PhpStorm.
 * User: kaya
 * Date: 8/18/16
 * Time: 4:30 PM
 */
//not run until submit bottun is clicked
if(isset($_POST['submit']))
{
    //echo "button clicked";
    //Store given username and password into variables
    $username = $_POST['username'];
    $password = $_POST['password'];
    include("../config/connects_db.php");
    if(empty($username) || empty($password))
    {
        echo "$username or $password is not filled";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
    <div id="container">
        <form action="login.php" method="post">
            Username:<br>
            <input type="text" name="username"><br>
            Password:<br>
            <input type="text" name="password"><br>

            <input type="submit" name="submit" value="login">
        </form>
    </div>
</body>
</html>
