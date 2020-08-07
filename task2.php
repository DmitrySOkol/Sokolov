<?php

class Stroup {
	
	private $colors = null;

	public function __construct($arr)
	{
		$this->colors = $arr;
	}

	public function getTest() 
	{
		if (is_array($colors))
		{
			$colors_arr = $this->getColors();
		}
		return;
	}

	private function getColors()
	{	
		$colors = [];
		if(!in_array($this->colors[$i], $colors)) 
		{
			for($i = rand(0, count($this->colors)); count($colors) < 4;)
			{	
				$colors[$this->getColorsName($this->colors[$i])] = $this->colors[$i];
			}
			foreach($colors as $name=>$color)
			{
				echo '<span style="color: '.$color.'">$name</span>';
			}
		}
		return $i;
	}

	private function getColorsName($color)
	{
		$check = false;
		for($i = rand(0, count($this->colors)); $check)
		{
			if($this->colors != $color) return $color;
		}
		return;
	}

}

$test = new Stroup([
	'red' => 'red', 
	'blue' => 'blue', 
	'green' => 'green', 
	'yellow' => 'yellow', 
	'lime' => 'lime', 
	'magenta' => 'magenta', 
	'black' => 'black', 
	'gold' => 'gold', 
	'gray' => 'gray', 
	'tomato' => 'tomato' ]);

$test->getTest();