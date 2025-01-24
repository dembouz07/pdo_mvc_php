<?php

function Client(){
    require '../views/clients/index.php';
}

function indexClient(){
    $clients = getAllClients();
    require '../views/clients/show.php';
}

function addClient(){
    require '../views/clients/create.php';
}

function storeClient(){
    extract($_POST);
    insertClient($nom, $prenom, $email, $telephone);
    header("location:index.php?page=client");
}

function editClient(){
    $result = getClientById($_GET['id']);
    $client = $result->fetch(2);
    require '../views/clients/edit.php';
}

function updateClients(){
    extract($_POST);
    updateClient($id, $nom, $prenom, $email, $telephone);
    header("location:index.php?page=client");
}

function deleteClients(){
    deleteClient($_GET['id']);
    header("location:index.php?page=client");
}