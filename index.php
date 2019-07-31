<?php

require_once 'controler/frontend.php';

session_start();
if (isset($_POST['deconnect']) ){
    session_destroy();
        header('Location: index.php');
}elseif (isset($_SESSION['login'])) {
    require_once 'controler/backend.php';
    if(isset($_GET['delete'])){
        suppr();
    }elseif (isset($_POST['title']) && isset($_POST['post'])) {
        add();
    }elseif (isset($_GET['page'])) {
        displayPage();
    }else {
       displayTravels();
    }
}else {
    require_once 'controler/backend.php';
    if (isset($_POST['mail']) && isset($_POST['pass'])) {
        login();
    }elseif (isset($_POST['title']) && isset($_POST['post'])) {
        add();
    }else if (isset($_GET['page'])) {
        displayPage();
    }else {
       displayTravels();
    }
}

