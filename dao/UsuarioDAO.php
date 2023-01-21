<?php

require_once('ConnectionFactory.php');

class UsuarioDAO {
    
   private $instance;
   
   function __construct() {
       $this->instance = ConnectionFactory::getInstance();
   }

   public function login($login, $senha) {
      try {
         $sql = "SELECT * FROM usuarios WHERE login = :log AND senha = :sen";
         $this->instance->prepare($sql);
         $this->instance->bindValue(":log", $login);
         $this->instance->bindValue(":sen", $senha);
         $this->instance->execute();
      }
      catch(Exception $e) {
         print "Ocorreu um erro ao tentar executar esta ação";
      }
    }

}