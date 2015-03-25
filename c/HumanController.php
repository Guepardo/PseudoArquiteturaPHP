<?php
class HumanController extends  GenericController{
	private $humanView; 
	
	public function __construct(){
		$this->humanView = new HumanView();
	}
	
	public function cadastrar($arg){
		$this->humanView->cadastroView(); 
		return $arg.' Entrei na classe cadastro. '; 
	}
	
	public function login($arg){
		$this->humanView->loginView();
		return $arg.' Entrei na classe cadastro. ';
	}
	
}