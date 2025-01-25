<?php
    $rv= new RendezVousController();
    if(isset($_GET['action'])){
        if($_GET['page'] == 'rendezvous' && $_GET['action'] == 'addRendezVous'){
            $rv->addRendezVous();
        }

        if($_GET['page'] == 'rendezvous' && $_GET['action'] == 'editRendezVous'){
            $rv->editRendezVous();
        }

        if($_GET['page'] == 'rendezvous' && $_GET['action'] == 'saveRendezVous'){
            $rv->storeRendezVous();
        }

        if($_GET['page'] == 'rendezvous' && $_GET['action'] == 'updateRendezVous'){
            $rv->updateRendezVouss();
        }

        if($_GET['page'] == 'rendezvous' && $_GET['action'] == 'deleteRendezVous'){
            $rv->deleteRendezVouss();
        }
    }else{
        $rv->indexRendezVous();
    }

?>