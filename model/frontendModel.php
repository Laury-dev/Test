<?php

require_once 'bdConfig.php';

//renvoie un tableau associatifs qui renvoi les voyages
function getTravels(){
    $db = connect();
    $reponse = $db->query('SELECT*FROM post');

    return $travels = $reponse->fetchAll(PDO:: FETCH_ASSOC);
}