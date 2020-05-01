<?php
require "./function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/B3W7O1/style.css">
    <title>Create confirmed</title>
</head>
<body>
<h1><a id='headerCreate' href='planning.php'>Return to planning?</a></h1>
<h1><a id='headerCreate' href='create.php'>Return to create?</a></h1>
<?php
if($_POST['startDate'] != NULL && $_POST['startTime'] != NULL && $_POST['hostName'] != NULL && $_POST['playerName'] != NULL){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $gameid = $_POST['name'];
            $dt = new DateTime($_POST['startDate'] . 'T' . $_POST['startTime']);
            $starttime = $dt->format('Y-m-d\TH:i:s.u');
            $hostname = $_POST['hostName'];
            $players = $_POST['playerName'];
            $result2 = PlanningMeester($gameid, $starttime, $hostname, $players);
        }
        echo "<p class='planningText'>Create is succesfull and has been added to planning</p>";
    }else{
        echo "<p class='planningText'>Create has been denied not all fields have been filled</p>";
    }
    ?>
</body>
</html>