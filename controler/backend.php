<?php

require_once 'model/backendModel.php';

function login(){
    $user = getUser($_POST['mail']);
    if ($user) {
        $pass = $_POST['pass'];
        if (password_verify ($pass , $user['password'])) {
            $_SESSION['login']=$_POST['mail'];
            header('Location: index.php');
        }else {
            header('Location: index.php?page=alert');
        }
    }else {
        header('Location: index.php?page=alert');
    }
}

function add(){
    $title=$_POST['title'];
    $post=$_POST['post'];
    if (isset($_POST['image'])) {
        $image=$_POST['image'];
    }else {
        $image = "null";
    }
    setPost($title, $post, $image);
    header('Location: index.php');
}

function suppr(){
    deletePost($_GET['delete']);
	displayTravels('Travel removed');
}
