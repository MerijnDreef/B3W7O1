<?php
require "./function.php";
$result = getAllGames();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/B3W7O1/style.css">
    <title>Create planning</title>
</head>
<body>
    <h1><a id='headerCreate' href='planning.php'>Return to planning?</a></h1>
    <form action='createconfirmed.php' method='POST'>
        <label for='name'>Name of game:</label><select name="name" id="name-select">
    <?php
    foreach($result as $game){
    echo "<option value='" . htmlspecialchars($game['id']) . "'>" . htmlspecialchars($game['name']) . "</option>";
    }
    ?>
</select>
        <label for='startDate'>Start date:</label><input type='date' name='startDate' id='startDate'>
        <label for='startTime'>Start time:</label><input type='time' name='startTime' id='startTime'>
        <label for='hostName'>Host name</label><input type='text' name='hostName' id='hostName'> 
        <label for='playerName'>Player name</label><input type='text' name='playerName' id='playerName'>
        <input type="submit" value="Create">
    </form>
</body>
</html>