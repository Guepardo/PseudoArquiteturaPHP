<?php
require('c/MainController.php');
require_once ('c/GenericController.php');

$mainController = new MainController(); 

//Getting the variables Post and Get 

//$useCase = (isset($_POST['useCase']) ) ?  $_POST['useCase'] : $_GET['useCase']; 
//$action  = (isset($_POST['action']) ) ?  $_POST['action'] : $_GET['action']; 

$useCase = 'humanos';
$action = 'cadastrar';

echo $mainController->findMyController($useCase, $action); 
