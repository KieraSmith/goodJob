<!DOCTYPE html>
<html>

<head>
    <title>Create an Event</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../materialize.css" media="screen,projection" />
    <!--Let browser know website is optimized for mobile-->
    <link type="text/css" rel="stylesheet" href="styleEvent.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <!--This is the content which will appear first. (the calendar) -->
    <div class="container">
        <!--This is where the date is display and where the controls are-->
        <div class="row">
            <div class="col s12">
                <h3>Create an Event!</h3>
            </div>
        </div>
        <!-- This is for the form the user will submit to the database -->
        <div class="row">
            <form class="col s12" action="register_event.php" method="POST" >
                <div class="row">
                    <div class="input-field col s12">
                        <h6>Name Event</h6>
                        <input id="input_text" type="text" name="eventname" data-length="30">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <h6>Start Date and Time</h6>
                        <input name="startevent" id="startDate" placeholder="2020-01-12 10:00:00" type="datetime-local">
                    </div>
                    <div class="input-field col s6">
                        <h6>End Date and Time</h6>
                        <input name="endevent" id="endDate" placeholder="2020-01-13 10:00:00" type="datetime-local">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <h6>Notes</h6>
                        <textarea id="textarea2" class="materialize-textarea" data-length="120" name="eventNote"></textarea>
                    </div>
                </div>
                <button class="btn waves-effect waves-light orange" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>
            </form>
        </div>
        <div class="row" id="submit">
            <div class="col s2"><a href="dayView.php">return to day</a></div>
            <div class="col s2"><a href="weekView.php">return to week</a></div>
<!--            <div class="col s2"><a href="monthView.php"> return month</a></div>-->
        </div>
    </div>
<!--    <script>-->
<!--        document.addEventListener('DOMContentLoaded', function() {-->
<!--            var elems = document.querySelectorAll('.datepicker');-->
<!--            var instances = M.Datepicker.init(elems, options);-->
<!--        });-->
<!--    </script>-->

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
