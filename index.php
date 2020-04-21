<?php
htmlspecialchars(require "./function.php");
htmlspecialchars($result = getAllGames());
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
  htmlspecialchars(foreach($result as $game)){
        echo "<div class='doos'>";
        echo htmlspecialchars("<img src='images/" . $game['image'] . "'>");
        echo htmlspecialchars("<p id='naamText'>" . $game['name'] . "</p>");
        echo htmlspecialchars("<p class='persoon'>Minimaal " . $game['min_players'] . " spelers</p>");
        echo htmlspecialchars("<p class='persoon'>Maximaal " . $game['max_players'] . " spelers</p>");
        echo htmlspecialchars('<a id="gameInfo" href="infogame.php/?name=' . urlencode($game['name']) . '"><i class="fas fa-search"></i>  Info over deze game</a>');
        echo "</div>";
   }
    ?>
</body>
</html>