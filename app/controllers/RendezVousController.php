<?php
class RendezVousController
{
    public function RendezVous(){
        require '../app/views/rendezvous/index.php';
    }
    
    public function indexRendezVous(){
        global $modelRv;

        $rendezVous = $modelRv->getAllrendezvous();
        require '../app/views/rendezvous/show.php';
    }
    
    public function addRendezVous(){
        global $modelRv;
        global $modelClient;

        $clients = $modelClient->getAllClients();
        require '../app/views/rendezvous/create.php';
    }
    
    public function storeRendezVous(){
        global $modelRv;

        extract($_POST);
        $modelRv->insertRendezVous($date, $heure, $description, $idclient);
        header("location:index.php?page=rendezvous");
    }
    
    public function editRendezVous(){
        global $modelRv;
        global $modelClient;

        $clients = $modelClient->getAllClients();
        $result = $modelRv->getRendezVousById($_GET['id']);
        $rendezVous = $result->fetch(2);
        require '../app/views/rendezvous/edit.php';
    }
    
    public function updateRendezVouss(){
        global $modelRv;

        extract($_POST);
        $modelRv->updateRendezVous($id, $date, $heure, $description, $idclient);
        header("location:index.php?page=rendezvous");
    }
    
    public function deleteRendezVouss(){
        global $modelRv;

        $modelRv->deleteRendezVous($_GET['id']);
        header("location:index.php?page=rendezvous");
    }
}
