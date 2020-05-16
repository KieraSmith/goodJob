<!DOCTYPE html>

<?php
session_start();
$username = $_SESSION['username'];
?>

<html>
    <head>
        <title>goodJob</title>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../materialize.css" media="screen,projection" />
        <!--Let browser know website is optimized for mobile-->
        <link type="text/css" rel="stylesheet" href="index.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
    <body>
        <div class="container">
            <div class="row">
                <br>
                <br>
                <div id="messageEnter" class="col s12">
                    <!--  Says who the person is  -->
                <div class="col s12">
                    <h1>Hello <?php echo $username;?>!</h1>
                </div>
                <div class="col s12">
                    <p>It is a pleasure to meet you! We are <b>goodJob,</b> a calendar application focused on building up your habits to better improve your life. Basically, we are a normal calendar with a few perks. You can schedule your day to day activities or events in your life here. But, the cool thing about us is that we can help you create habits and put them on this calendar. We base the creation of these habits based on behavioral research. </p>
                </div>
                <div class="col s12">
                <p>Why did we create this you might ask. It's hard to create habits let alone maintain them. This is used as a tool to see if your habits are effective. If they are not, what aspects of the habit can we fix to make them effective? As a reminder, this is still in development (so there may be some aspects to fix). But, we hope you enjoy this as much as our team did. </p>
                </div>
                <div class="col s12">
                    <p>Anyhow, I am rambling, let's get started! <a href="habitEvent.php">Let's create your habit.</a></p>
                </div>
                    <div class="col s12">
                        <p>Just want to see your events and their dates <a href="dayView.php">Let's just check out the calendar view!</a></p>
                    </div>
                <div class="col s12">
                    <a class="waves-effect waves-light btn"href="logout.php">Log Out</a>
                </div>
            </div>
        </div>
    </body>
</html>
