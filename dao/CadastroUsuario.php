<?php

require_once('ConnectionFactory.php');

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$nascimento = $_POST["nascimento"];

$connection = ConnectionFactory::getInstance();

$rs = $connection->prepare("SELECT email FROM usuarios WHERE email = ?");
$rs->bindParam(1, $email);
if($rs->execute()) {
   if($rs->rowCount() > 0) {
      echo "Esse e-mail já foi registrado no site"; 
   }
   else {         
      try {
         $stmt = $connection->prepare("INSERT INTO usuarios (nome, email, senha, nascimento) VALUES (?, ?, SHA(?), ?)");
         $stmt->bindParam(1, $nome);
         $stmt->bindParam(2, $email);
         $stmt->bindParam(3, $senha);
         $stmt->bindValue(4, date('Y-m-d', strtotime($nascimento)));            
         $stmt->execute();
         echo "ok";
      }
      catch(PDOException $pdoe) {
         echo "erro";
      }
   }
}