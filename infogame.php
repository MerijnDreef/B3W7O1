<?php
require "./function.php";
$result = getInfoGames();
$planning = getPlanningGames();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/B3W7O1/style.css">
    <title>info</title>
</head>
<body>
<h1><a id='headerCreate' href='index.php'>Return to home?</a></h1>
    <?php
   echo "<div class='infoDiv'>";
   echo "<img id='InfoImg' src='images/" . $result[0]['image'] . "'>";
   echo "<p class='planningText'>" . htmlspecialchars($result[0]['name']) . "</p>";
   echo $result[0]['description'];
   echo "<p class='planningText'> Expansions : " . htmlspecialchars($result[0]['expansions']) . "</p>";
   echo "<p class='planningText'> Skills : " . htmlspecialchars($result[0]['skills']) . "</p>";
   echo "<p class='planningText'> Minimal players : " . htmlspecialchars($result[0]['min_players']) . "</p>";
   echo "<p class='planningText'> maximum players : " . htmlspecialchars($result[0]['max_players']) . "</p>";
   echo "<p class='planningText'> play minutes : " . htmlspecialchars($result[0]['play_minutes']) . "</p>";
   echo "<p class='planningText'> explain minutes : " . htmlspecialchars($result[0]['explain_minutes']) . "</p>";
   echo $result[0]['youtube'];
   echo "<p><a id='planningButton' href='" . htmlspecialchars($result[0]['url']) ."'>Link to the games website</a></p>";
   echo "<p class='planningText'> StartTime : " . htmlspecialchars($planning['starttime']) . "</p>";
   echo "<p class='planningText'> Host : " . htmlspecialchars($planning['host']) . "</p>";
   echo "<p class='planningText'> Players : " . htmlspecialchars($planning['players']) . "</p>";
   echo "</div>";
    ?>
</body>
</html>