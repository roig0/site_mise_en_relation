<?php

require 'Model/GestionBDD.php';
require 'Model/GestionAgri.php';
require 'Model/GestionEnt.php';
require 'Model/GestionRegion.php';


var_dump($_POST);

if($_POST['email'])
{
    
}

if($_POST['page'])
{
    require 'Vue/newUser.inc.php';
}

