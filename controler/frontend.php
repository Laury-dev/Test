<?php

require_once 'model/frontendModel.php';

function displayTravels(){
    $travels = getTravels();
    require 'view/displayTravels.php';
}

function displayLogin(){
    require 'view/displayLogin.php';
}

function displayAdd(){
    require 'view/displayAdd.php';
}

function displayLoginAlerte(){
    require 'view/displayLoginAlerte.php';
}

function displayPage(){
    switch ($_GET['page']) {
        case 'voyages':
            displayTravels();
            break;
        case 'login':
            displayLogin();
            break;
        case 'add':
            displayAdd();
            break;
        default:
        displayTravels();
            break;
    }
}
