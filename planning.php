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
    <script src="https://kit.fontawesome.com/ca88a28f8c.js" crossorigin="anonymous"></script>
    <title>Planning</title>
</head>
<body>
    <h1 id='h1Home'><a id='headerHome' href="index.php">Home</a></h1> 
    <h1><a id='headerPlanning' href="planning.php"><i class="far fa-hand-point-right"></i> planning</a></h1>
    <h1><a id='headerPlanning' href="create.php">Create planning</a></h1>
<?php
   foreach($result as $planning){
    
   }
?>
    
</body>
</html>