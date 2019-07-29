<?php 

ob_start();
?>

<div class="container mt-5">
<form action="" method="post">
  <div class="form-group">
    <label for="exampleInputTitle">Titre :</label>
    <input type="text" class="form-control" name="title" id="exampleInputTitle" placeholder="Entrer titre">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Post :</label>
    <textarea class="form-control" name="post" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputImage">Image :</label>
    <input type="text" class="form-control" name="image" id="exampleCheck1">
  </div>
  <button type="submit" class="btn btn-primary">Insérer</button>
</form>
</div>';

<?php
$content = ob_get_clean();

require_once 'template.php';