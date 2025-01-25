<?php
class Database 
{
   private $port = "5432";
   private $host = "localhost";
   private $dbname = "gestion_rendez_vous";
   private $username = "postgres";
   private $password = "passer";
    
   public function getConnexion(){
       try {
          $connexion = new PDO("pgsql:host=$this->host;port=$this->port;dbname=$this->dbname", $this->username, $this->password);
          $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         // echo('Connexion reussi!');
          return $connexion; 
       } catch (PDOException $e) {
          echo $e->getMessage();
       }
   }
}
?>
