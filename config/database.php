<?php
    try
    {
        $dbname = 'framework';
        $db = new PDO("mysql:host=localhost;dbname=$dbname;charset=utf8", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }