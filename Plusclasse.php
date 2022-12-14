
<?php 
require 'configadmin.php';

var_dump($dbh);

if (!empty($_POST['classe']) ){
  $classe=$_POST['classe'];



  $inscription = $dbh->prepare('INSERT INTO classe(ID_classe) value (?) ');
  $inscription->execute([$classe]);
}
  
  
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1>Admin</h1>

<form method="post">
<div class="mb-3">
    <label  class="form-label">Classe</label>
    <input type="text" name="classe" class="form-control">
</div>    
  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>

 
</html>