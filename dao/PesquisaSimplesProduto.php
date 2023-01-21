<?php

require_once('ConnectionFactory.php');

session_start();
if(isset($_SESSION['id'])) {
   $id = $_SESSION['id'];    
}
else {
   exit();    
}

$descricao = $_GET['query'];

$connection = ConnectionFactory::getInstance();

$rs = $connection->prepare("SELECT descricao FROM itens WHERE descricao LIKE ?");
$rs->bindValue(1, '%'.$descricao.'%');
$rs->execute();
$dados = array();
if($rs->rowCount() > 0) {
   while($row = $rs->fetch(PDO::FETCH_OBJ)) { 
      array_push($dados, $row->descricao); 
   }
}
else { 
   array_push($dados, 'Nada foi encontrado'); 
}

$json = json_encode($dados);

echo $json;