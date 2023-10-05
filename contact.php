<?php

$lastName = htmlentities($_POST['lastname']);
$firstName = htmlentities($_POST['firstname']);
$subject = htmlentities($_POST['contactMessage']);
$phone = htmlentities($_POST['phone']);
$mail = htmlentities($_POST['mail']);


$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(!isset($lastName) || trim($lastName) === '') 
        $errors[] = "Le nom est obligatoire";
    if(!isset($firstName) || trim($firstName) === '') 
        $errors[] = "Le prénom est obligatoire";
        if(!isset($phone) || trim($phone) === '') 
        $errors[] = "Le numéro de tel est obligatoire";
    if(!isset($mail) || trim($mail) === '') 
        $errors[] = "chakal mets le bon mail aussi";
        if(!isset($subject) || trim($subject) === '') 
        $errors[] = "Le message est bien vide";

    if(!empty($errors)) {
        require "error.php";
        die();
    }
    else {
        require 'resultat.php';
    }
}

