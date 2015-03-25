<?php
class HumanView extends Genericview{
	public function __construct(){
		parent::__construct($this); 
	}
	
	public function cadastroView(){
		parent::getTemplateByAction('cadastro');
		echo $this->templator->generateOutput(); 
	}
	
	public function loginView(){
		parent::getTemplateByAction('login'); 
		parent::show(); 
	}
}