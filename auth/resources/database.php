<?php
$username='root';
$dsn='mysql:host=localhost;dbname=expertscommunity';
$password='4uBKqGFfRmKmVaFR';

try{
    $db=new PDO($dsn,$username,$password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo 'connected to the database ';
}
catch(PDOException $ex)
{
echo 'connection fail'.$ex->getMessage();
}
