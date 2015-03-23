<?php
class Human{
	private $name; 
	private $age; 
	private $weight; 
	
	public function __construct( $name, $age, $wieght){
		self::$name = $name; 
		self::$age = $age; 
		self::$weight = $weight;
	}
	
	public function getName(){
			return $name;
	}
	
	public function getAge(){
		return $age; 
	}
	
	public function getWeight(){
		return $weight; 
	}
}