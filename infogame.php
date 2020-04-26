<?php
require "./function.php";
$result = getInfoGames();

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
   echo "<img src='images/" . htmlspecialchars($result[0]['image']) . "'>";
   echo "<p class='planningText'>" . htmlspecialchars($result[0]['name']) . "</p>";
   echo $result[0]['description'];
   echo "<p class='planningText'> Expansions : " . htmlspecialchars($result[0]['expansions']) . "</p>";
   echo "<p class='planningText'> Skills : " . htmlspecialchars($result[0]['skills']) . "</p>";
   echo "<p><a id='planningButton' href='" . htmlspecialchars($result[0]['url']) ."'>Link to the games website</a></p>";
   echo "</div>";
    ?>
</body>
</html>