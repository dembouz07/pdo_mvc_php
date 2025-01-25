<?php
    $cl = new ClientController();
    if(isset($_GET['action'])){
        if($_GET['page'] == 'client' && $_GET['action'] == 'addClient'){
            $cl->addClient();
        }

        if($_GET['page'] == 'client' && $_GET['action'] == 'editClient'){
            $cl->editClient();
        }

        if($_GET['page'] == 'client' && $_GET['action'] == 'saveClient'){
            $cl->storeClient();
        }

        if($_GET['page'] == 'client' && $_GET['action'] == 'updateClient'){
            $cl->updateClients();
        }

        if($_GET['page'] == 'client' && $_GET['action'] == 'deleteClient'){
            $cl->deleteClients();
        }
    }else{
        $cl->indexClient();
    }

?>