<a href="index.php">Home</a>
<a href="index.php?page=client">Client</a>
<a href="index.php?page=rendezvous">Rendez-Vous</a>
<?php
    require '../models/database.php';
    require '../models/Client.php';
    require '../models/RendezVous.php';

    require '../controllers/CLientController.php';
    require '../controllers/RendezVousController.php';

    if (isset($_GET['page'])) {
        if($_GET['page'] == 'client'){
            Client();
        }

        if($_GET['page'] == 'rendezvous'){
            RendezVous();
        }
    }else{
        ?>
            <h1>GESTION RENDEZ-VOUS</h1>
        <?php
    }

?>

