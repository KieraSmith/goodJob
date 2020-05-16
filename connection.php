<!-- Connecting with the database --->

<?php

/* By connecting to the database, we can create new variables
    and submit SQL statements */

$mysql= new mysqli (
    "webdev.iyaclasses.com",
    "kierasmi",
    "Acad276_Smith_1246473348",
    "kierasmi_goodJob"
);

/* Test connection and if error displays an error code number */

if ($mysql->connect_errno) {
    echo ("DB problem! : " . $mysql->connect_error); exit ();
} else {
   // echo("DB is GOOD!");
}

?>