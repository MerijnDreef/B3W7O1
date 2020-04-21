<?php
function openDatabaseConnection(){
$dbservername = "localhost";
$username = 'SilverHawk'; 
$password = '2lhTgGvMS4YKS3t2H7MV';
$dbname = "game";

    $conn = new PDO('mysql:host=localhost;dbname=game', $username, $password);
    return $conn;
}
function getAllGames(){
    $conn = openDatabaseConnection();
    $stnt = $conn->prepare("SELECT id, name, image, min_players, max_players, play_minutes, explain_minutes FROM games order by id;");
    $stnt->execute();
   return $stnt ->fetchAll();
} 
function getGames(){
    $conn = openDatabaseConnection();
    $stnt = $conn->prepare("SELECT id, name, image, min_players, max_players,  FROM planning")
}
?>