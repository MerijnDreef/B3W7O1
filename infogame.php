<?php
require "./function.php";
$result = getInfoGames($_GET['name']);
$planning = getPlanningGames($_GET['name']);

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
    foreach($result as $result){
   echo "<div class='infoDiv'>";
   echo "<img id='InfoImg' src='images/" . $result['image'] . "'>";
   echo "<p class='planningText'>" . htmlspecialchars($result['name']) . "</p>";
   echo $result['description'];
   echo "<p class='planningText'> Expansions : " . htmlspecialchars($result['expansions']) . "</p>";
   echo "<p class='planningText'> Skills : " . htmlspecialchars($result['skills']) . "</p>";
   echo "<p class='planningText'> Minimal players : " . htmlspecialchars($result['min_players']) . "</p>";
   echo "<p class='planningText'> maximum players : " . htmlspecialchars($result['max_players']) . "</p>";
   echo "<p class='planningText'> play minutes : " . htmlspecialchars($result['play_minutes']) . "</p>";
   echo "<p class='planningText'> explain minutes : " . htmlspecialchars($result['explain_minutes']) . "</p>";
   echo $result['youtube'];
   echo "<p><a id='planningButton' href='" . htmlspecialchars($result['url']) ."'>Link to the games website</a></p>";
    }
   foreach($planning as $planning){
   echo "<p class='planningText'> StartTime : " . htmlspecialchars($planning['starttime']) . "</p>";
   echo "<p class='planningText'> Host : " . htmlspecialchars($planning['host']) . "</p>";
   echo "<p class='planningText'> Players : " . htmlspecialchars($planning['players']) . "</p>";
     }
   echo "</div>";
    ?>
</body>
</html>