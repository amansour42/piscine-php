<?php

Class Targaryen{

	public function resistsFire() {
		return false;
	}
	public function getBurned()
	{
		if ($this->resistsFire() == false)
			return ("burns alive");
		return "emerges naked but unharme";
	}
}



?>