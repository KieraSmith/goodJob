<!--
  Here, we write code for login
    -->

<?php

require_once('connection.php');
$username = $password = $pwd = '';

$username = $_POST['username'];
$pwd = $_POST['password'];
$password = MD5($pwd);
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($mysql, $query);
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $id = $row["user_id"];
        $username = $row["username"];
        session_start();
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $username;
    }
    header("Location: index.php");
} else {
    echo "Invalid email or password";
}
?>