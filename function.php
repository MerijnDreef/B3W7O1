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
    return $stnt->fetchAll();
} 
function getGames(){
    $conn = openDatabaseConnection();
    $stnt = $conn->prepare("SELECT * FROM planning");
    $stnt->execute();
    return $stnt->fetchAll();
}
function getInfoGames(){
    $conn = openDatabaseConnection();
    $stnt = $conn->prepare("SELECT * FROM games");
    $stnt->execute();
    return $stnt->fetchAll();
}
function getCreateGames(){
    $conn = openDatabaseConnection();
    $stnt = $conn->prepare("SELECT id, name FROM games");
    $stnt->execute();
    return $stnt->fetchall();
}
function PlanningMeester($gameid, $starttime, $hostname, $players){
    $conn = openDatabaseConnection();
    $stnt = $conn->prepare("INSERT INTO planning (id, gameid, starttime, host, players) VALUES (NULL, :gameid, :starttime, :hostname, :players)");
    $stnt->execute([':gameid' => $gameid, ':starttime' => $starttime, ':hostname' => $hostname, ':players' => $players]);
    return $stnt->errorCode();
}
?>