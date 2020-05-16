<!DOCTYPE html>
<html>

<?php
require_once('connection.php');
session_start();
$username = $_SESSION['username'];

$datetime = new DateTime();


$offset = $_GET['offset'];
if($offset == "")
    $offset = 0;

if($offset >= 0)
    $datetime->modify('+'.$offset.' day');

else
    $datetime->modify(''.$offset.' day');
//Convert the date string into a unix timestamp.
$unixTimestamp = strtotime($datetime);
//Get the day of the week using PHP's date function.
$dayOfWeek = date("l", $datetime->format('U'));

$wordDate = $datetime->format('Y-m-d');
$habitDate = $datetime->format('Y-m-d');


//$sql = "SELECT event_name, start_time, end_time FROM events WHERE now = '".$wordDate."' ";
$startTimes = [];
$habitStartTimes = [];

if(isset($_SESSION['id'])) {
    $state = "SELECT event_name, start_time, end_time, eventNotes FROM events";
    $stateTwo = "SELECT cue, envir, reward, routine, starthabit, endhabit FROM habits";


    $result = mysqli_query($mysql, $state);
    $checkResults = mysqli_num_rows($result);

    $habitResult = mysqli_query($mysql, $stateTwo);
    $checkHabit = mysqli_num_rows($habitResult);



    if ($checkResults > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $startTimes [] = $row;
        }
    }

    if ($checkHabit > 0) {
        while ($row = mysqli_fetch_assoc($habitResult)) {
            $habitStartTimes [] = $row;
        }
    }
}

$weekDay = [];

 for($i = 0; $i < 7; $i++){
     $day = clone $datetime;
     $day->modify($i.' day');
     $weekDay [] = $day;
 }

 $color = ["#ed4135","#3da0d1","#fdf498","#7bc043","#0392cf","#a363d9", "#ee657a"];


?>

<head>
    <title>Week</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../materialize.css" media="screen,projection" />
    <!--Let browser know website is optimized for mobile-->
    <link type="text/css" rel="stylesheet" href="styleWeek.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
<!--This is the content which will appear first. (the calendar) -->
<div class="container">
    <!--This is where the date is display and where the controls are-->
    <div class="row heading">
        <div class="col s6">
            <h3><?php echo $weekDay[0]->format('F Y');?></h3>
        </div>
        <div class="col s6" id="controls">
            <?php if(isset($_SESSION['id'])): ?>
                <a class="link" href="logout.php" class="control_detail task">Log Out</a>
            <?php else: ?>
                <a class="link" href="log.php" class="control_detail task">Log In</a>
            <?php endif; ?>
            <a href="signUp.php" class="control_detail task">Sign Up</a>
            <a href="habitEvent.php" class="control_detail task">make a habit</a>
            <a href="createEvent.php" class="control_detail">add event</a>
            <a href="weekView.php?offset=<?php echo $offset+7; ?>"><i class="tiny material-icons control_detail">arrow_forward</i></a>
            <a href="weekView.php" class="control_detail">today</a>
            <a href="weekView.php?offset=<?php echo $offset-7; ?>"><i class="tiny material-icons control_detail">arrow_back</i></a>
        </div>
    </div>
    <div class="">
        <div class="nameWeek"><?php echo $weekDay[6]->format('D d');?></div>
        <div class="nameWeek"><?php echo $weekDay[5]->format('D d');?></div>
        <div class="nameWeek"><?php echo $weekDay[4]->format('D d');?></div>
        <div class="nameWeek"><?php echo $weekDay[3]->format('D d');?></div>
        <div class="nameWeek"><?php echo $weekDay[2]->format('D d');?></div>
        <div class="nameWeek"><?php echo $weekDay[1]->format('D d');?></div>
        <div class="nameWeek"><?php echo $weekDay[0]->format('D d');?></div>
    </div>
    <!--This is the actual calendar-->
    <table class="responsive-table" class="highlight">
        <?php
        for ($i=0; $i< 24; $i++){
            echo "<thead>";
            echo "<tr>";
            for($h = 6; $h >= 0; $h--){
                $currentDay = $weekDay[$h]->format('Y m d');
                echo "<th class=\"event\">";
                foreach($startTimes as $event) {
                    $date = strtotime($event["start_time"]);
                    $eventDate = date("Y m d", $date);
                    $event_hour = date("G", $date);
                    if($i == $event_hour && $currentDay == $eventDate){
                        $disName = $event["event_name"];
                        $disNote = $event["eventNotes"];
                        echo "<i class=\"material-icons\" style=\"color:".$color[$h]."\" onclick=\"popUp('$disName', '$disNote')\">date_range</i>";
                    }
                }
                foreach($habitStartTimes as $habits) {
                    $dateHabit = strtotime($habits["starthabit"]);
                    $habitDate = date("Y m d", $dateHabit);
                    $event_hour_habit = date("G", $dateHabit);
                    if($i == $event_hour_habit && $currentDay == $habitDate){
                        $disRoutine = $habits["routine"];
                        $disCue = $habits["cue"];
                        $disReward = $habits["reward"];
                        $disEnviron = $habits["envir"];
                        echo "<i class=\"material-icons\" style=\"color: ".$color[$h]."\" onclick=\"popUpHabit('$disRoutine', '$disCue', '$disReward', '$disEnviron')\">extension</i>";
                    }
                }
                echo  "</th>";
            }
            if($i == 0){
                $hour = "12 AM";
            } elseif ($i >= 1 && $i <= 11){
                $hour = $i . " " . "AM";
            } elseif ($i == 12) {
                $hour = "12 PM";
            } else {
                $hour =  ($i - 12) . " " . "PM";
            }
            echo "<th>$hour</th>";
            echo "</tr>";
            echo "</thead>";
        }
        ?>
<!--        <thead>-->
<!--        <tr>-->
<!--            <th class="event"><i class="material-icons" style="color: #00b0ff">add_alert</i></th>-->
<!--            <th class="event"></th>-->
<!--            <th class="event"></th>-->
<!--            <th class="event"></th>-->
<!--            <th class="event"></th>-->
<!--            <th class="event"></th>-->
<!--            <th class="event"></th>-->
<!--            <th class="event"></th>-->
<!--            <th class="event"></th>-->
<!--            <th>12 AM</th>-->
<!--        </tr>-->
<!--        </thead>-->
        </thead>
    </table>
    <div class="row">
        <div class="col s1"><a href="dayView.php">day</a></div>
        <div class="col s1"><a href="weekView.php" id="current_page">week</a></div>
<!--        <div class="col s1"><a href="monthView.php">month</a></div>-->
    </div>
</div>

<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    function popUp(event, note){
        alert("Event: " + event + "\n" + "Notes: " + note);
    }
    function popUpHabit(routine, cue, envir, reward){
        alert("Routine: " + routine + "\n" + "Cue: " + cue + "\n" + "Reward: " + reward + "\n" + "Location: " + envir);
    }
</script>
</body></html>
