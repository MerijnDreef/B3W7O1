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
    <title>Delete?</title>
</head>
<body>
    <h1><a id='headerCreate' href='index.php'>Return to planning?</a></h1>
    <p class='planningText'>Type 'DELETE AND CONFIRMED' to Delete this item</p>
    <form action='deleteconfirmed.php' method='POST'>
    <input type='text' name='input'></input>
    <input type='hidden' name='id' value='<?php echo htmlspecialchars($_GET['name']); ?>'>
    <input type='submit' value='Confirm?'>
    </form>
</body>
</html>