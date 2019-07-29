<?php

require_once 'model/backendModel.php';

function login(){
    $user = getUser($_POST['mail']);

    if ($user) {
        $pass = $_POST['pass'];
        if (password_verify ($pass , $user['password'])) {
            $_SESSION['login']=$_POST['mail'];
            displayTravels();
        }else {
            displayLoginAlerte();
        }
    }else {
        displayLoginAlerte();
    }
}

function add(){
    $title=$_POST['title'];
    $post=$_POST['post'];
    $image=$_POST['image'];
    setPost($title, $post, $image);
}