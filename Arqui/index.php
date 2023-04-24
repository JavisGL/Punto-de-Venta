<?php
//session_start();

/*require 'base_de_datos.php';

if (isset($_SESSION['user_id'])) {
  $records = $base_de_datos->prepare('SELECT id, email, password FROM usuarios WHERE id = :id');
  $records->bindParam(':id', $_SESSION['user_id']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $user = null;

  if (count($results) > 0) {
    $user = $results;
  }     
}*/

/*if(!empty($user)): ?>
<a href="listar.php">
    <?php else: ?>
        <a href="login.php">Login</a> or

        <a href="signup.php">Login</a>*/
header("Location: listar.php");
?>