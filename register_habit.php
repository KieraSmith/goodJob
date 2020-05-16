<?php

# Connect with the database
require_once('connection.php');

# The variables are empty
$cue = $reward = $environ = $routine = $startHabit = $endHabit = '';

# Puts what was filled in the form into variables
$cue = $_POST['cue'];
$reward = $_POST['reward'];
$environ = $_POST['environ'];
$routine = $_POST['routine'];
$startHabit = $_POST['startHabit'];
$endHabit = $_POST['endHabit'];

# makes a statement to add the assigned variables into the database
$query = "INSERT INTO habits (cue, envir, reward, routine, starthabit, endhabit) 
            VALUES ('$cue', '$reward', '$environ', '$routine', '$startHabit', '$endHabit')";

# inserts the assigned variables into the database
$result = mysqli_query($mysql, $query);

# if the query works then take the user to the log in page
if ($result)
{
    header("location: dayView.php");
}
else {
    echo "Error :".$query;
}

?>



