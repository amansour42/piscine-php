!#usr/bin/php
<?php

Class Color{

	static $verbose = false;
	public $red = 0;
	public $green = 0;
	public $blue = 0;


	public function __Construct(array $argv)
	{
		if ($argv['rgb'])
		{
			$this->blue = $argv['rgb'] & 255;
			$this->green = ($argv['rgb'] & (255 << 8)) >>8;
			$this->red = ($argv['rgb'] & (255 << 16)) >>16;
		}
		else{
			if ($argv['red'])
				$this->red = round($argv['red']);
			if ($argv['green'])
				$this->green  = round($argv['green']);
			if ($argv['blue'])
				$this->blue = round($argv['blue']);
		}
		if (self::$verbose == true)
			echo $this->__tostring()." constructed\n";
		return ;
	}
	public function __toString()
	{
		$strr = " ";
		$strg = " ";
		$strb = " ";
		if ($this->red < 100)
			$strr = "  ";
		if ($this->red < 10)
			$strr = "   ";
		if ($this->green < 100)
			$strg = "  ";
		if ($this->green < 10)
			$strg = "   ";
		if ($this->blue < 100)
			$strb = "  ";
		if ($this->blue < 10)
			$strb = "   ";
		return ("Color( red:".$strr.$this->red.", green".$strg.$this->green.", blue:".$strb.$this->blue.")");

	}
	public function add(Color $color)
	{
		$reslut = ($this->red + $color->red) << 16 + $this->blue + $color->blue + ($this->green + $color->green) << 8;
		return new Color(array('rgb' => $result));
	}
	public function sub(Color $color)
	{
		$reslut = ($this->red - $color->red) << 16 + $this->blue - $color->blue + ($this->green - $color->green) << 8;
		return new Color(array('rgb' => $result));

	}
	public function mult($p)
	{
		$reslut = ($this->red * $p) << 16 + $this->blue * $p + ($this->green * $p) << 8;
		return new Color(array('rgb' => $result));
	}
	static function doc()
	{
		$file = file_get_contents("Color.doc.txt");
		echo $file."\n";
		return ;
	}
	public function __Destruct()
	{
		if (self::$verbose == true)
			echo $this->__toString()." destructed.\n";
	}
}
?>