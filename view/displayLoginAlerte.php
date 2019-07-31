<?php 

ob_start();
?>
<form class="col-6 offset-3 mt-5
 jumbotron" action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Adresse mail :</label>
    <input type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe :</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-outline-success">Valider</button>
</form>
</div>';
<div class="alert alert-danger col-6 offset-3" role="alert">
    <p>Attention mauvais login / mot de passe !</p>
</div>
<?php
$content = ob_get_clean();

require_once 'template.php';