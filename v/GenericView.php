<?php
class GenericView {
	protected $templator;
	private $dirName;
	public function __construct($class) {
		require_once ("library/MiniTemplator.class.php");
		$this->templator = new MiniTemplator ();
		$var = new ReflectionClass ( $class );
		
		$this->dirName = strtolower ( substr ( $var->getName (), 0, strlen ( $var->getName () ) - 4 ) ) . '/';
	}
	protected function getTemplateByAction($templateName) {
		$this->templator->readTemplateFromFile ( PATH_TEMPLATE . $this->dirName . $templateName . '.html' );
	}
	protected function show() {
		echo $this->templator->generateOutput ();
	}
	protected function sendAjax() {
	}
}