<?php
Class NightsWatch implements IFighter{
	private $_str = "";
	public function recruit($s){
		if (method_exists(get_class($s), 'fight'))
		$_str .= $s->fight();
	}
	public function fight(){
		print($str);
	}
}
?>