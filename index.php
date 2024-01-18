<?php
require './bdd.php';
if (isset($_FILES['file'])) {
  $tmpName = $_FILES['file']['tmp_name'];
  $name = $_FILES['file']['name'];
  $size = $_FILES['file']['size'];
  $error = $_FILES['file']['error'];
  $type = $_FILES['file']['type'];

  $tabExtension = explode('.', $name);
  $extension = strtolower(end($tabExtension));

  //tableau des extation qu'on autorise
  $extennsionsAutorisees = ['jpg', 'jpeg', 'gif', 'png', 'webp'];


  move_uploaded_file($tmpName, './upload/' . $name);
  $tailleMax = 40000;


  if (in_array($extension, $extennsionsAutorisees) && $size <= $tailleMax && $error == 0) {
    $uniqueName = uniqid('', true);
    $fileName = $uniqueName . '.' . $extension;
    move_uploaded_file($tmpName, './upload/' . $fileName);
    $req = $db->prepare('INSERT INTO file (name) VALUES (?)');
    $req->execute([$fileName]);
    echo 'image enregistre';
  } else {
    echo 'Mauveais extension ou taille trop important';
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>uploard image</title>
</head>

<body>

  <form action="index.php" method="POST" enctype="multipart/form-data">
    <label for="file">Fichier</label>
    <input type="file" name="file">
    <button type="submit">Enregistre</button>
  </form>

  <h2>Mes Images</h2>
  <?php
  $req = $db->query('SELECT name from file');
  while ($data = $req->fetch()) {
    echo '<img src="./upload/' . $data['name'] . '" width="200px"><br>';
  }
  ?>
</body>

</html>