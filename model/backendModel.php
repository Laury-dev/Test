<?php
require_once 'bdConfig.php';

//renvoie un tableau associatifs qui renvoi les info de l'utilisateur
function getUser($login){
    $mail = $login;
    //Connection a la base de donnée
    $db = connect();
    //requet dans la base de donnée
    $sql='SELECT * FROM users WHERE mail=:mail';
    $request = $db->prepare($sql);
    $request->execute([
        ':mail' => htmlentities(strip_tags($mail)) 
    ]);
    //Récupération du password correspondant au mail
    return $request->fetch(PDO::FETCH_ASSOC);
}

function setPost($title, $post, $image){
    $title = $title;
    $post = $post;
    $image = $image;
    
    //Connection a la base de donnée
    $db = connect();
    $sql = 'INSERT INTO post (id, title, parag, image) VALUES (null, :title, :post, :image)';
    $request = $db->prepare($sql);
    $request->execute([
        ':title'=> htmlentities(strip_tags($title)),
        ':post'=> htmlentities(strip_tags($post)),
        ':image'=> htmlentities(strip_tags($image))
    ]);
}