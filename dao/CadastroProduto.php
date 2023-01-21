<?php

require_once('ConnectionFactory.php');

session_start();
if(isset($_SESSION['id'])) {
   $id = $_SESSION['id'];    
}
else {
   exit();    
}

$categoria = $_POST["categoria"];
$subcategoria = $_POST["sub_categoria"];
$descricao = $_POST["descricao"];
$item = $_POST["item"];
$preco = $_POST["preco"];

$connection = ConnectionFactory::getInstance();

$rs = $connection->prepare("SELECT id FROM produtos WHERE usuario_id = $id");
$rs->bindParam(1, $id);
if($rs->execute()) {
   if($rs->rowCount() > 0) {
      echo "Você já possui 1 produto cadastrado";
      exit();
   }
   else {
      try {
         $stmt = $con->prepare("INSERT INTO produtos (usuario_id, categoria_id, subcategoria_id, item_id, descricao, preco) VALUES (?, ?, ?, ?, ?, ?)");
         $stmt->bindParam(1, $id);
         $stmt->bindParam(2, $categoria);
         $stmt->bindParam(3, $subcategoria);
         $stmt->bindParam(4, $item);
         $stmt->bindParam(5, $descricao);
         $stmt->bindParam(6, $preco);
         $stmt->execute();
         echo "ok";
      }
      catch(PDOException $pdoe) {
         echo "Erro ao tentar cadastrar produto";
      }
   }
}
