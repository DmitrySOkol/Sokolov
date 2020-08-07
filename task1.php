<?php


class Base {
	
	public function getClassName(){
		var_dump(get_class($this));
		return;
	}

}

class First extents Base {
	
	public function getLetter() {
		echo 'A';
		return;
	}

}

class Second extents Base {
	
	public function getLetter() {
		echo 'B';
		return;
	}

}

$first = First();
$second = Second();

$first->getClassName();
$first->getLetter();

$second->getClassName();
$second->getLetter();