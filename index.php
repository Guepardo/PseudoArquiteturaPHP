<?php
require('c/MainController.php');
$mainController = new MainController(); 

//Getting the variables Post and Get 

$useCase = (isset($_POST['useCase']) ) ?  $_POST['useCase'] : $_GET['useCase']; 
$action  = (isset($_POST['action']) ) ?  $_POST['action'] : $_GET['action']; 

$mainController->findMyController($useCase, $action); 