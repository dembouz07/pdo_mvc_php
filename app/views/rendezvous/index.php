<?php

    if(isset($_GET['action'])){
        if($_GET['page'] == 'rendezvous' && $_GET['action'] == 'addRendezVous'){
            addRendezVous();
        }

        if($_GET['page'] == 'rendezvous' && $_GET['action'] == 'editRendezVous'){
            editRendezVous();
        }

        if($_GET['page'] == 'rendezvous' && $_GET['action'] == 'saveRendezVous'){
            storeRendezVous();
        }

        if($_GET['page'] == 'rendezvous' && $_GET['action'] == 'updateRendezVous'){
            updateRendezVouss();
        }

        if($_GET['page'] == 'rendezvous' && $_GET['action'] == 'deleteRendezVous'){
            deleteRendezVouss();
        }
    }else{
        indexRendezVous();
    }

?>