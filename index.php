<?php

require_once 'controler/frontend.php';

session_start();
var_dump($_SESSION['login']);
if (isset($_SESSION['login'])) {
    if (isset($_GET['page'])) {
        displayPage();
    }else {
       displayTravels();
    }
    
}else {
    if (isset($_POST['mail']) && isset($_POST['pass'])) {
        require_once 'controler/backend.php';
        login();
    }elseif (isset($_POST['title']) && isset($_POST['post']) && isset($_POST['image'])) {
        add();
    }elseif (isset($_POST['deconnect']) && $_POST['deconnect'] == 1) {
        session_destroy();
        displayTravels();
    }else if (isset($_GET['page'])) {
        displayPage();
    }else {
       displayTravels();
    }
}

