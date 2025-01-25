<?php
class RendezVousController
{
    public function RendezVous(){
        require '../views/rendezvous/index.php';
    }
    
    public function indexRendezVous(){
        $rendezVous = getAllrendezvous();
        require '../views/rendezvous/show.php';
    }
    
    public function addRendezVous(){
        $clients = getAllClients();
        require '../views/rendezvous/create.php';
    }
    
    public function storeRendezVous(){
        extract($_POST);
        insertRendezVous($date, $heure, $description, $idclient);
        header("location:index.php?page=rendezvous");
    }
    
    public function editRendezVous(){
        $clients = getAllClients();
        $result = getRendezVousById($_GET['id']);
        $rendezVous = $result->fetch(2);
        require '../views/rendezvous/edit.php';
    }
    
    public function updateRendezVouss(){
        extract($_POST);
        updateRendezVous($id, $date, $heure, $description, $idclient);
        header("location:index.php?page=rendezvous");
    }
    
    public function deleteRendezVouss(){
        deleteRendezVous($_GET['id']);
        header("location:index.php?page=rendezvous");
    }
}
