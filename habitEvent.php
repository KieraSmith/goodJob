<!DOCTYPE html>
<html>

<head>
    <title>Create an Habit</title>
    <link type="text/css" rel="stylesheet" href="styleHabit.css"/>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../materialize.css" media="screen,projection" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
    </style>
</head>

<body>
<!--This is the content which will appear first. (the calendar) -->
<div class="container">
    <!--This is where the date is display and where the controls are-->
    <div class="row">
        <div class="col s12">
            <h3>Create an Habit!</h3>
        </div>
    </div>
    <!-- This is for the form the user will submit to the database -->
    <div class="row">
        <form class="col s12" action="register_habit.php" method="POST">
            <h5>Routine</h5>
            <p>This is the action you wish to complete. This can be emotional, physical, or mental</p>
            <div class="row">
                <div class="input-field col s12">
                    <h6>What's do you want to do?</h6>
                    <input id="input_text" type="text" data-length="30" name="routine">
                </div>
            </div>
            <h5>Cue</h5>
            <p>A trigger that tells your brain to go into automatic mode and which habit to use. For example, the morning (right when you wake up) you make up your bed. The trigger is right when you wake up.</p>
            <h6>What's cue(s) would you like for this routine?</h6>
            <div class="row">
                <div class="input-field col s12">
                    <input id="input_text" type="text" data-length="30" name="cue">
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <h6>Where would you like to complete this routine?</h6>
                    <input id="input_text" type="text" data-length="30" name="environ">
                </div>
            </div>
            <h5>Reward</h5>
            <p>A reward helps your brain figure out if this particular loop is worth remembering for the future</p>
            <h6>What's reward would you like for this routine?</h6>
            <div class="input-field col s12">
                <input id="input_text" type="text" data-length="30" name="reward">
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <h6>Comfirm the Start Date and Time</h6>
                    <input   id="startDate" placeholder="2020-01-12 11:00" name="startHabit" type="datetime-local">
                </div>
                <div class="input-field col s6">
                    <h6>Comfirm the End Date and Time</h6>
                    <input  id="endDate" placeholder="2020-01-12 10:00" name="endHabit" type="datetime-local">
                </div>
            </div>
            <!--  <p>
                <h6>How often will this habit repeat?</h6>
                <label>
                    <input name="group1" type="radio" checked />
                    <span>Everyday</span>
                </label>
            </p>
            <p>
                <label>
                    <input name="group1" type="radio" />
                    <span>Once a week</span>
                </label>
            </p>
            <p>
                <label>
                    <input name="group1" type="radio" />
                    <span>Once a month</span>
                </label>
            </p>
            <div class="row">
                <div class="input-field col s12">
                    <h6>Notes</h6>
                    <textarea id="textarea2" class="materialize-textarea" data-length="120"></textarea>-->
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
<!--    <div class="col s2"><a href="monthView.php"> return month</a></div>-->
</div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.datepicker');
        var instances = M.Datepicker.init(elems, options);
    });
</script>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
