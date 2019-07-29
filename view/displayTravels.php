<?php

ob_start();

echo '<div class="container">';
foreach ($travels as $travel) {
    if($travel['image'] != 'null'){
        echo'<div class="row justify-content-md-center mb-3 mt-3"><div class="card" style="width: 75%;"><img src="'.$travel['image'].'" class="card-img-top" alt=""><div class="card-body">';
        echo '<h2 class="card-title">'.$travel['title'].'</h2>';
        echo '<p class="card-text">'.$travel['parag'].'</p></div></div></div>';
    }else {
        echo'<div class="row justify-content-md-center mb-3 mt-3"><div class="card" style="width: 75%;"><div class="card-body"><h2 class="card-title">'.$travel['title'].'</h2>';
        echo'<p class="card-text">'.$travel['parag'].'</p></div></div></div>';
    }
    
}
echo '</div>';

$content = ob_get_clean();

require_once 'template.php';