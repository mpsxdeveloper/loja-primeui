<?php

require_once('ConnectionFactory.php');

$connection = ConnectionFactory::getInstance();

$email = $_POST["email_l"];
$senha = $_POST["senha_l"];

$rs = $connection->prepare("SELECT id, nome, email, senha FROM usuarios WHERE email = ? AND senha = SHA(?)");
$rs->bindParam(1, $email);
$rs->bindParam(2, $senha);

if($rs->execute()) {
   if($rs->rowCount() > 0) {
      $row = $rs->fetch(PDO::FETCH_ASSOC);
      session_start();
      $_SESSION['username'] = $row['nome'];
      $_SESSION['id'] = $row['id'];
      echo "ok";
   }
   else {
      echo "Usuário não cadastrado. Verifique o e-mail e senha informados.";
   }
}