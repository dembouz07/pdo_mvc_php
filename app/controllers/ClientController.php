<?php
class ClientController
{

    public function Client(){
        require '../views/clients/index.php';
    }
    
    public function indexClient(){
        global $modelClient;
        
        $clients = $modelClient->getAllClients();
        require '../views/clients/show.php';
    }
    
    public function addClient(){
        require '../views/clients/create.php';
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
        require '../views/clients/edit.php';
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
