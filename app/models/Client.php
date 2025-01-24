<?php

function getAllClients(){
    global $connexion;

    $query = "SELECT * FROM clients ORDER BY id ASC";
    $stmt = $connexion->prepare($query);
    $stmt->execute();
    return $stmt;
}

function getClientById($id){
    global $connexion;

    $query = "SELECT * FROM clients WHERE id = ?";
    $stmt = $connexion->prepare($query);
    $stmt->execute(array($id));
    return $stmt;
}

function insertClient($nom, $prenom, $email, $telephone){
    global $connexion;

    $query = "INSERT INTO clients (nom, prenom, email, telephone) VALUES (?, ?, ?, ?)";
    $stmt = $connexion->prepare($query);
    $stmt->execute(array($nom, $prenom, $email, $telephone));
    $stmt->closeCursor();
}

function updateClient($id, $nom, $prenom, $email, $telephone){
    global $connexion;

    $query = "UPDATE clients SET nom = ?, prenom = ?, email = ?, telephone = ? WHERE id = ?";
    $stmt = $connexion->prepare($query);
    $stmt->execute(array($nom, $prenom, $email, $telephone, $id));
    $stmt->closeCursor();
}

function deleteClient($id){
    global $connexion;

    $query = "DELETE FROM clients WHERE id = ?";
    $stmt = $connexion->prepare($query);
    $stmt->execute(array($id));
    $stmt->closeCursor();
}