<?php
class Dbh{
 protected function connect(){
    try{
    $host = "localhost";
    $dbname = "gameblog";
    $username="root";
    $password="";
    $dbh = new PDO(`mysql:host=$host ; dbname=$dbname,charset=utf8` , $username , $password);
    return $dbh;
    }
    catch(PDOException $e){
     die("Database Failed to connect: " . $e->getMessage());
    }
 }
}