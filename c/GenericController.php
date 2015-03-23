<?php
 abstract class GenericController{
 	public function sayMayName(){
 		$var =  new ReflectionClass(self); 
 		return $var->getName(); 
 	}
 	
 	public function sayMayActions(){
 		$var =  new ReflectionClass(self);
 		return $var->getMethods(ReflectionMethod::IS_PUBLIC);
 	}
 }