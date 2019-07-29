<?php
    require_once 'config.php';

// Fonction de connection a la base de donnée
function connect(){
    global $acces, $login, $pwd;
    try {
        $db = new PDO($acces, $login, $pwd);
        return $db;
    } catch (Exception $excep) {
        die('Error : '.$excep->getMessage());
    }
}