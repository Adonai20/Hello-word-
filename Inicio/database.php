<?php
    $server = 'localhost';
    $username ='Jarod';
    $password ='123';
    $database ='Login_data';

    try {
         $conexion = new PDO("mysql:host=$server;dbname=$database;",$username,$password);
        } catch (PDOException $error) {
         die('connected failed: '.$error->getMessage());
        }
?>  