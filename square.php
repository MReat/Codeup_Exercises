<?php  

class Square extends Rectangle
{

	public function __construct ($height)
	{
		parent::__construct($height, $height);
			// $this->height = $height;
			// $this->width = $height;
		
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