<?php
require "./function.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/B3W7O1/style.css">
    <title>Update confirmed</title>
</head>
<body>
<h1><a id='headerCreate' href='planning.php'>Return to planning?</a></h1>
<?php
    if($_POST['startDate'] != NULL && $_POST['startTime'] != Null && $_POST['hostName'] != NULL && $_POST['playerName'] != NULL ){
        $dt = new DateTime($_POST['startDate'] . 'T' . $_POST['startTime']);
        $starttime = $dt->format('Y-m-d\TH:i:s.u');
        $result = Updates($_POST['id'], $_POST['gameid'], $starttime, $_POST['hostName'], $_POST['playerName']);
        echo "<p class='planningText'>StartTime has been confirmed</p>";
    }else{
        echo "<p class='planningText'>Update hasn't been confirmed</p>";
    }
    ?>
</body>
</html>