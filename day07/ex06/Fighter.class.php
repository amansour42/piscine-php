<?php
Class Fighter{
	private $str;

	public function __construct($name){
		$this->str = $name;
	}
	public function getName(){
		return ($this->str);
	}
}