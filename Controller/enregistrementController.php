<?php
require 'Model/GestionBDD.php';
require 'Model/GestionAgri.php';
require 'Model/GestionEnt.php';
require 'Model/GestionRegion.php';

if(isset($_POST))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];

}