<?php

function RendezVous(){
    require '../views/rendezvous/index.php';
}

function indexRendezVous(){
    $rendezVous = getAllrendezvous();
    require '../views/rendezvous/show.php';
}

function addRendezVous(){
    $clients = getAllClients();
    require '../views/rendezvous/create.php';
}

function storeRendezVous(){
    extract($_POST);
    insertRendezVous($date, $heure, $description, $idclient);
    header("location:index.php?page=rendezvous");
}

function editRendezVous(){
    $clients = getAllClients();
    $result = getRendezVousById($_GET['id']);
    $rendezVous = $result->fetch(2);
    require '../views/rendezvous/edit.php';
}

function updateRendezVouss(){
    extract($_POST);
    updateRendezVous($id, $date, $heure, $description, $idclient);
    header("location:index.php?page=rendezvous");
}

function deleteRendezVouss(){
    deleteRendezVous($_GET['id']);
    header("location:index.php?page=rendezvous");
}