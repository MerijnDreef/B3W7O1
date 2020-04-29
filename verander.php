<?php
require "./function.php";

$result = getPlanning($_POST["id"]);

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $gameid = $_POST['name'];
//     $dt = new DateTime($_POST['startDate'] . 'T' . $_POST['startTime']);
//     $starttime = $dt->format('Y-m-d\TH:i:s.u');
//     $hostname = $_POST['hostName'];
//     $players = $_POST['playerName'];
//     $result2 = Updates($gameid, $starttime, $hostname, $players);
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/B3W7O1/style.css">
    <title>Update</title>
</head>
<body>
<h1><a id='headerCreate' href='planning.php'>Return to planning?</a></h1>

<!-- <form action='veranderconfirmed.php' method='POST'>
 <input type='text' name='id' value='<?php// echo htmlspecialchars($_GET['id']); ?>'>
        <label for='name'>Name of game:</label><select name="name" id="name-select"> -->
    <?php

echo $_POST["id"];


  //  echo $result['id'];
  //  echo $result['gameid'];
 //   echo $result['starttime'];
 //   echo $result['host'];
  //  echo $result['players'];
   // foreach($result as $planning){
 //   echo "<option value='" . htmlspecialchars($planning['id']) . "'>" . htmlspecialchars($planning['name']) . "</option>";
  //  }
    ?>
</select>
        <label for='startDate'>Start date:</label><input type='date' name='startDate' id='startDate'><?php ?></input>
        <label for='startTime'>Start time:</label><input type='time' name='startTime' id='startTime'>
        <label for='hostName'>Host name</label><input type='text' name='hostName' id='hostName'> 
        <label for='playerName'>Player name</label><input type='text' name='playerName' id='playerName'>
        <input type="submit" value="Update">
    </form>
</body>
</html>