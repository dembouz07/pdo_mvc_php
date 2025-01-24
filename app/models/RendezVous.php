<?php

function getAllrendezvous(){
    global $connexion;

    $query = "SELECT cl.nom, cl.prenom, rv.*
    FROM rendezvous rv, clients cl 
    WHERE rv.idclient = cl.id
    ORDER BY rv.id ASC";
    $stmt = $connexion->prepare($query);
    $stmt->execute();
    return $stmt;
}

function getRendezVousById($id){
    global $connexion;

    $query = "SELECT rv.*, cl.nom, cl.prenom
     FROM rendezvous rv, clients cl
     WHERE rv.idclient = cl.id
     AND rv.id = ?";
    $stmt = $connexion->prepare($query);
    $stmt->execute(array($id));
    return $stmt;
}

function insertRendezVous($date, $heure, $description, $idclient){
    global $connexion;

    $query = "INSERT INTO rendezvous (daterv, heure, descriptionrv, idclient) VALUES (?, ?, ?, ?)";
    $stmt = $connexion->prepare($query);
    $stmt->execute(array($date, $heure, $description, $idclient));
    $stmt->closeCursor();
}

function updateRendezVous($id, $date, $heure, $description, $idclient){
    global $connexion;

    $query = "UPDATE rendezvous SET daterv = ?, heure = ?, descriptionrv = ?, idclient = ? WHERE id = ?";
    $stmt = $connexion->prepare($query);
    $stmt->execute(array($date, $heure, $description, $idclient, $id));
    $stmt->closeCursor();
}

function deleteRendezVous($id){
    global $connexion;

    $query = "DELETE FROM rendezvous WHERE id = ?";
    $stmt = $connexion->prepare($query);
    $stmt->execute(array($id));
    $stmt->closeCursor();
}