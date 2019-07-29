<?php

require_once 'model/frontendModel.php';

function displayTravels(){
    $travels = getTravels();
    require 'view/displayTravels.php';
}