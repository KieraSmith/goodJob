<?php

# Connect with the database
require_once('connection.php');

# The variables are empty
$nameEvent = $startEvent = $endEvent = $eventNote =  '';

# Puts what was filled in the form into variables
$nameEvent = $_POST['eventname'];
$startEvent = $_POST['startevent'];
$endEvent = $_POST['endevent'];
$eventNote = $_POST['eventNote'];


# makes a statement to add the assigned variables into the database
$statement = "INSERT INTO events (event_name, start_time, end_time, eventNotes) 
            VALUES ('$nameEvent', '$startEvent', '$endEvent', '$eventNote')";

# inserts the assigned variables into the database
$results = mysqli_query($mysql, $statement);

# if the query works then take the user to the log in page
if ($results)
{
    header("location: dayView.php");
}
else {
    echo "Error :".$query;
}

?>
