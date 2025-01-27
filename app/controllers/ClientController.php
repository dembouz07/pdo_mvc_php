<?php
class ClientController
{

    public function Client(){
        require '../app/views/clients/index.php';
    }
    
    public function indexClient(){
        global $modelClient;
        
        $clients = $modelClient->getAllClients();
        require '../app/views/clients/show.php';
    }
    
    public function addClient(){
        require '../app/views/clients/create.php';
    }
    
    public function storeClient(){
        global $modelClient;

        extract($_POST);
        $modelClient->insertClient($nom, $prenom, $email, $telephone);
        header("location:index.php?page=client");
    }
    
    public function editClient(){
        global $modelClient;

        $result = $modelClient->getClientById($_GET['id']);
        $client = $result->fetch(2);
        require '../app/views/clients/edit.php';
    }
    
    public function updateClients(){
        global $modelClient;

        extract($_POST);
        $modelClient->updateClient($id, $nom, $prenom, $email, $telephone);
        header("location:index.php?page=client");
    }
    
    public function deleteClients(){
        global $modelClient;

        $modelClient->deleteClient($_GET['id']);
        header("location:index.php?page=client");
    }
}
