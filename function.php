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
    $stnt = $conn->prepare("SELECT * FROM games order by id;");
    $stnt->execute();
    return $stnt->fetchAll();
} 
function getGames(){
    $conn = openDatabaseConnection();
    $stnt = $conn->prepare("SELECT * FROM planning");
    $stnt->execute();
    return $stnt->fetchAll();
}
function PlanningMeester($gameid, $starttime, $hostname, $players){
    $conn = openDatabaseConnection();
    $stnt = $conn->prepare("INSERT INTO planning (id, gameid, starttime, host, players) VALUES (NULL, :gameid, :starttime, :hostname, :players)");
    $stnt->execute([':gameid' => $gameid, ':starttime' => $starttime, ':hostname' => $hostname, ':players' => $players]);
    return $stnt->errorCode();
}
function commandThis($gameid){
    $conn = openDatabaseConnection();
    $stnt = $conn->prepare("SELECT * FROM games WHERE id = :id");
    $stnt->execute([':id' => $gameid]);
    return $stnt->fetchall();
}
?>