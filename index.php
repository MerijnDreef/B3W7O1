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
    <script src="https://kit.fontawesome.com/ca88a28f8c.js" crossorigin="anonymous"></script>
    <title>Deze opdracht</title>
</head>
<body>
    <h1 id='h1Home'><a id='headerHome' href="index.php">Home</a></h1> <!-- <i class="far fa-clock"></i><i class="far fa-calendar-alt"></i> -->
    <h1><a id='headerPlanning' href="planning.php">planning</a></h1>
   <?php 
  foreach($result as $game){
        echo "<div class='doos'>";
        echo "<img src='images/" . htmlspecialchars($game['image']) . "'>";
        echo "<p id='naamText'>" . htmlspecialchars($game['name']) . "</p>";
        echo "<p class='persoon'>Minimaal " . htmlspecialchars($game['min_players']) . " spelers</p>";
        echo "<p class='persoon'>Maximaal " . htmlspecialchars($game['max_players']) . " spelers</p>";
        echo '<a id="gameInfo" href="infogame.php/?name=' . htmlspecialchars(urlencode($game['name'])) . '"><i class="fas fa-search"></i>  Info over deze game</a>';
        echo "</div>";
   }
    ?>
</body>
</html>