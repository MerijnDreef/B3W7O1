<?php
require "./function.php";

$result = getGames();
$result2 = getAllGames();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/B3W7O1/style.css">
    <script src="https://kit.fontawesome.com/ca88a28f8c.js" crossorigin="anonymous"></script>
    <title>Planning</title>
</head>
<body>
    <h1 id='h1Home'><a id='headerHome' href="index.php">Home</a></h1> 
    <h1><a id='headerPlanning' href="planning.php"><i class="far fa-hand-point-right"></i> planning</a></h1>
    <h1><a id='headerPlanning' href="create.php">Create planning</a></h1>
<?php
    
   foreach($result as $planning){
    $gameBoi = commandThis($planning['gameid']);
    echo "<div class='planningDoos'>";
    echo "<img id='planningImg' src='images/" . htmlspecialchars($gameBoi[0]['image']) . "'>";
    echo "<p class='planningText'> Name : " . htmlspecialchars($gameBoi[0]['name']) . "</p>";
    echo "<p class='planningText'> StartTime : " . htmlspecialchars($planning['starttime']) . "</p>";
    echo "<p class='planningText'> Host : " . htmlspecialchars($planning['host']) . "</p>";
    echo "<p class='planningText'> Players : " . htmlspecialchars($planning['players']) . "</p>";
    echo "<p><a id='planningButton' href='delete.php?name=" . htmlspecialchars(urlencode($planning['id'])) . "'>Delete?</a></p>";
    echo "<p><a id='planningButton' href='verander.php?name=" . htmlspecialchars(urlencode($planning['id'])) . "'>Detail change?</a></p>";
   }
?>
</body>
</html>