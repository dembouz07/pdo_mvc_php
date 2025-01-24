<?php

    if(isset($_GET['action'])){
        if($_GET['page'] == 'client' && $_GET['action'] == 'addClient'){
            addClient();
        }

        if($_GET['page'] == 'client' && $_GET['action'] == 'editClient'){
            editClient();
        }

        if($_GET['page'] == 'client' && $_GET['action'] == 'saveClient'){
            storeClient();
        }

        if($_GET['page'] == 'client' && $_GET['action'] == 'updateClient'){
            updateClients();
        }

        if($_GET['page'] == 'client' && $_GET['action'] == 'deleteClient'){
            deleteClients();
        }
    }else{
        indexClient();
    }

?>