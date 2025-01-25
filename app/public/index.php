<a href="index.php">Home</a>
<a href="index.php?page=client">Client</a>
<a href="index.php?page=rendezvous">Rendez-Vous</a>
<?php
    require '../models/database.php';
    require '../models/Client.php';
    require '../models/RendezVous.php';

    require '../controllers/CLientController.php';
    require '../controllers/RendezVousController.php';
    
    $database = new Database();
    $connexion = $database->getConnexion();
    $cl = new ClientController();
    $rv = new RendezVousController();
    $modelClient = new Client();

    if (isset($_GET['page'])) {
        if($_GET['page'] == 'client'){
            $cl->Client();
        }

        if($_GET['page'] == 'rendezvous'){
            $rv->RendezVous();
        }
    }else{
        ?>
            <h1>GESTION RENDEZ-VOUS</h1>
        <?php
    }

?>

