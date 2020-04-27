<?php
require "./function.php";


if($_POST['input'] == 'DELETE AND CONFIRMED'){
    
    $result = Deletes($_POST['id']);
 
    } 
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/B3W7O1/style.css">
    <title>DELETE CONFIRMED</title>
</head>
<body>
    <h1><a id='headerPlanning' href='planning.php'>Return to planning</a></h1>
    <p class='planningText'>DELETE has been confirmed goodday.</p>
</body>
</html>