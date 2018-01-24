<?php

Class jaime extends Lannister{
	public function sleepWith($s)
	{
		if (get_parent_class($s) !== 'Lannister')
		{
			print ("Let's do this.".PHP_EOL);
		}
		elseif (get_class($s) === "Cersei")
		{
			print ("With pleasure, but only in a tower in Winterfell, then.".PHP_EOL);
		}
		else
		{
			print ("Not even if I'm drunk !".PHP_EOL);
		}
	}
}

?>