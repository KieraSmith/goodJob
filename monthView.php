<!DOCTYPE html>
<html>

<?php
session_start();
$username = $_SESSION['username'];
?>

<head>
    <title>Month</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../materialize.css" media="screen,projection" />
    <!--Let browser know website is optimized for mobile-->
    <link type="text/css" rel="stylesheet" href="styleMonth.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
<!--This is the content which will appear first. (the calendar) -->
<div class="container">
    <!--This is where the date is display and where the controls are-->
    <div class="row heading">
        <div class="col s6">
            <h3>March 2020</h3>
        </div>
        <div class="col s6" id="controls">
            <?php if(isset($_SESSION['id'])): ?>
                <a class="link" href="logout.php" class="control_detail task">Log Out</a>
            <?php else: ?>
                <a class="link" href="log.php" class="control_detail task">Log In</a>
            <?php endif; ?>
            <a href="signUp.php" class="control_detail task">Sign Up</a>
            <a href="habitEvent.php" class="control_detail task">make a habit</a>
            <a href="createEvent.php" class="control_detail task">add event</a>
            <i class="tiny material-icons control_detail">arrow_forward</i>
            <a href="#" class="control_detail">today</a>
            <i class="tiny material-icons control_detail">arrow_back</i>
        </div>
    </div>
    <!--This is the actual calendar-->
    <table class="responsive-table" class="highlight">
        <thead>
        <tr>
            <th>Sun</th>
            <th>Mon</th>
            <th>Tue</th>
            <th>Wed</th>
            <th>Thu</th>
            <th>Fri</th>
            <th>Sat</th>
        </tr>
        <tr>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
        </tr>
        <tr>
            <th>8</th>
            <th>9</th>
            <th>10</th>
            <th>11</th>
            <th>12</th>
            <th>13</th>
            <th>14</th>
        </tr>
        <tr>
            <th>15</th>
            <th>16</th>
            <th>17</th>
            <th>18</th>
            <th>19</th>
            <th>20</th>
            <th>21</th>
        </tr>
        <tr>
            <th>22</th>
            <th>23</th>
            <th>24</th>
            <th>25</th>
            <th>26</th>
            <th>27</th>
            <th>28</th>
        </tr>
        <tr>
            <th><i class="material-icons" style="color: #00b0ff">add_alert</i> 29</th>
            <th>30</th>
            <th>31</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
        </tr>
        <tr>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
            <th>9</th>
            <th>10</th>
            <th>11</th>
        </tr>
        </thead>
    </table>
    <div class="row">
        <div class="col s1"><a href="dayView.php">day</a></div>
        <div class="col s1"><a href="weekView.php">week</a></div>
        <div class="col s1"><a href="monthView.php" id="current_page">month</a></div>
    </div>
</div>

<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body></html>

