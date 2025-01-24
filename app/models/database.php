<?php
    $port = "5432";
    $host = 'localhost';
    $dbname = 'gestion_rendez_vous';
    $username = 'postgres';
    $password = 'passer';
 
  $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$username;password=$password";
   
  try{
     $connexion = new PDO($dsn);
     if($connexion){
      //echo "Connecté à $dbname avec succès!";
     }
  }catch (PDOException $e){
     echo $e->getMessage();
  }
?>