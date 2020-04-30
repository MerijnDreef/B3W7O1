<?php
require "./function.php";
$result = getPlanning($_GET["id"]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <link rel="stylesheet" href="/B3W7O1/style.css"> -->
    <title>Update</title>
</head>
<body>
<?php

   //echo $_GET["id"];

   // echo $result;

   foreach($result as $planning){
    echo $planning['id'];
    echo $planning['gameid'];
    echo $planning['starttime'];
    echo $planning['host'];
    echo $planning['players'];
   }
?>
 <br> 
<form action='veranderconfirmed.php' method='POST'> 
        
        <label for='startDate'>Start date:</label><input type='date' name='startDate' id='startDate' value='<?php echo $result[0]['starttime']?>'>
        <label for='startTime'>Start time:</label><input type='time' name='startTime' id='startTime' value='<?php echo $result[0]['starttime']; ?>'>
        <label for='hostName'>Host name:</label><input type='text' name='hostName' id='hostName' value='<?php echo $result[0]['host']; ?>'>
        <label for='playerName'>Player name:</label><input type='text' name='playerName' id='playerName' value='<?php echo $result[0]['players']; ?>'>
        <input type='hidden' name='id' value='<?php echo htmlspecialchars($_GET['id']); ?>'>
        <input type='hidden' name='gameid' value='<?php echo $result[0]['gameid'];?>'>
        <input type="submit" value="Update">
     </form> 
<?php foreach($result as $planning){ ?>
id is :   <?php  echo $planning['id']; ?> <br>
Gameid is :   <?php  echo $planning['gameid']; ?> <br> 
starttime is :   <?php  echo $planning['starttime']; ?> <br> 
host is :   <?php  echo $planning['host']; ?><br> 
players is :   <?php  echo $planning['players']; ?><br> 
<?php } ?><br> 
dit is een test 
</body>
</html>