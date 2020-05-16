<?php

# Connect with the database
require_once('connection.php');

# The variables are empty
$f_name = $l_name = $email = $username = $password = $pwd = '';

# Puts what was filled in the form into variables
$f_name = $_POST['firstname'];
$l_name = $_POST['lastname'];
$email = $_POST['email'];
$username = $_POST['username'];
$pwd = $_POST['password'];
# This makes the passwords secure
$password = MD5($pwd);

# makes a statement to add the assigned variables into the database
$query = "INSERT INTO users (f_name, l_name, email, username, password) 
            VALUES ('$f_name', '$l_name', '$email', '$username', '$password')";

# inserts the assigned variables into the database
$result = mysqli_query($mysql, $query);

# if the query works then take the user to the log in page
if ($result)
{
    header("location: log.php");
}
else {
    echo "Error :".$query;
}

?>


