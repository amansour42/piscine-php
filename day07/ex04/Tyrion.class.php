<?php 

Class Tyrion extends Lannister{
	public function sleepWith($s)
	{
		if (get_parent_class($s) === "Lannister")
			print("Not even if I'm drunk !".PHP_EOL);
		else
			print("Let's do this.".PHP_EOL);
		return ;
	}
}