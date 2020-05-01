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
    $stnt = $conn->prepare("SELECT * FROM games order by id");
    $stnt->execute();
    return $stnt->fetchAll();
} 
function getInfoGames($id){
    $conn = openDatabaseConnection();
    $stnt = $conn->prepare("SELECT * FROM games WHERE id = :id");
    $stnt->execute([':id' => $id]);
    return $stnt->fetchAll();
}
function getPlanningGames($gameid){
    $conn = openDatabaseConnection();
    $stnt = $conn->prepare("SELECT * FROM planning WHERE gameid = :gameid");
    $stnt->execute([':gameid'=> $gameid]);
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
    $stnt = $conn->prepare("INSERT INTO planning (gameid, starttime, host, players) VALUES (:gameid, :starttime, :hostname, :players)");
    $stnt->execute([':gameid' => $gameid, ':starttime' => $starttime, ':hostname' => $hostname, ':players' => $players]);
    return $stnt->errorCode();
}
function commandThis($gameid){
    $conn = openDatabaseConnection();
    $stnt = $conn->prepare("SELECT * FROM games WHERE id = :id");
    $stnt->execute([':id' => $gameid]);
    return $stnt->fetchall();
}
function Deletes($id){
    $conn = openDatabaseConnection();
    $stnt = $conn->prepare("DELETE FROM planning WHERE id = :id");
    $stnt->execute([':id'=> $id]);
    return $stnt->errorCode();
}
function getPlanning($id){
    $conn = openDatabaseConnection();
    $stnt = $conn->prepare("SELECT * FROM planning where id = :id");
    $stnt->execute([':id'=> $id]);
    return $stnt->fetchAll();
}
function Updates($id, $gameid, $starttime, $hostname, $players){
    $conn = openDatabaseConnection();
    $stnt = $conn->prepare("UPDATE planning set gameid = :gameid, starttime = :starttime, host = :hostname , players = :players WHERE id = :id");
    $stnt->execute([':id' => $id, ':gameid' => $gameid, 'starttime' => $starttime, ':hostname' => $hostname, ':players' => $players]);
    return $stnt->errorCode();
}
?>