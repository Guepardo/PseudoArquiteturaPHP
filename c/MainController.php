<?php
class MainController{
	public function __construct(){
		//incluir todos os controllers espec�ficos aqui;
		
	}
	
	public function findMyController($useCase, $action){
	
	}
	
	private function includeControllers(){
		include("c/HumanController.php");
	}
}