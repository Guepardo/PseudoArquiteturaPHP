<?php
//Criar um arquivo para definições mais tarde. 
define ( 'PROJECT_NAME', 'PseudoArquitetura' );
define ( 'PATH_TEMPLATE', $_SERVER ['DOCUMENT_ROOT'] . PROJECT_NAME . '/templates/' );

require ('c/MainController.php');
require ('v/GenericView.php');
require ('v/HumanView.php');
require_once ('c/GenericController.php');

$mainController = new MainController ();
echo $mainController->findMyController(); 
