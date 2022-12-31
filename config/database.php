<?php
    try
    {
        require('../config/config.php');
        $db = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8", "$dbuser", "$dbpass", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }