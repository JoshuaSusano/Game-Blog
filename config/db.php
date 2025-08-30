<?php
$host = "localhost";
$dbname = "gameblog";
$username="root";
$password="";
try{
$dbh = new PDO(`mysql:host=$host ; dbname=$dbname,charset=utf8` , $username , $password);
}catch(PDOException $e){
  die("Database Failed to connect: " . $e->getMessage());
}
