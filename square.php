<?php  

class Square extends Rectangle
{

	public function __construct ($height)
	{
		parent::__construct($height, $height); // review this solution... we changed the 2nd parameter to make it work
			// $this->height = $height;
			// $this->width = $width;
		
	}

	public function area ()
	{
		parent::area();
		return $this->height * $this->height;
	}

	public function perimeter ()
	{
		parent::perimeter();
		return $this->height * 4;
	}
}
?>