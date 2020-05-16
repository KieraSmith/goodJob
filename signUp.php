<!DOCTYPE html>
<html>

<head>
    <title>Sign Up</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../materialize.css" media="screen,projection" />
    <!--Let browser know website is optimized for mobile-->
    <link type="text/css" rel="stylesheet" href="styleUser.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
<!--This is the content which will appear first. (the calendar) -->
<div class="container">
    <!--This is where the date is display and where the controls are-->
    <div class="row">
        <div class="col s12">
            <h3>Sign Up</h3>
        </div>
    </div>
    <div class="row">
        <form class="col s12" action="registration_code.php" method="POST">

            <div class="row">
                <div class="input-field col s6">
                    <input id="first_name" type="text" class="validate" name="firstname" required>
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate" name="lastname" required>
                    <label for="last_name">Last Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="username"  type="text" class="validate" name="username" required>
                    <label for="username">Username</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password" type="password" class="validate" name="password" required>
                    <label for="password">Password</label>
                </div>
            </div>
<!--            <div class="row">-->
<!--                <div class="input-field col s12">-->
<!--                    <input id="secondPassword" type="password" class="validate" name="secondPassword" required>-->
<!--                    <label for="password">Retype Password</label>-->
<!--                </div>-->
<!--            </div>-->
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate" name="email" required>
                    <label for="email">Email</label>
                </div>
            </div>
            <button class="btn waves-effect waves-light orange" type="submit" name="reg_user">Create Account
            </button>
            <div class="row" id="createAccount">
                <div class="col s12">
                    <a href="log.php" class="OG">Already have account? Log In</a>
                </div>
            </div>
        </form>
    </div>
    <div class="row" id="submit">
        <div class="col s2"><a href="dayView.php">return to day</a></div>
        <div class="col s2"><a href="weekView.php">return to week</a></div>
    </div>
</div>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>

