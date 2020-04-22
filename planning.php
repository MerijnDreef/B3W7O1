<?php
require "./function.php";

$result = getGames();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/B3W7O1/style.css">
    <title>Planning</title>
</head>
<body>
    <h1 id='h1Home'><a id='headerHome' href="index.php">Home</a></h1> 
    <h1><a id='headerPlanning' href="planning.php">planning</a></h1>
    <label for='startdate'></label><input type='date' name='startdate' id='startdate'>
    <label for='starttime'></label><input type='time' name='starttime' id='starttime'>
<?php
   foreach($result as $planning){

   }
?>
    
</body>
</html>