<?php

class Queries {
	
	private $connect = null;
	private $dbadress = '127.0.0.1';
	private $username = 'user';
	private $password = 'password';
	private $dbname = 'dbname';

	public function __construct()
	{
		$this->connect = mysqli_connect($dbadress, $username, $password, $name);
	}

	public function query1($name)
	{
		$sql = 'SELECT 100 + sum(t.amount) - (SELECT sum(t.amount) FROM transactions t JOIN persons ON persons.id = t.from_person_id WHERE persons.fullname = "' . $name . '") FROM transactions t JOIN persons ON persons.id = t.to_person_id WHERE persons.fullname = "' .  $name . '"';
		$this->getResult($sql);
	}

	public function query2()
	{
		$sql = 'SELECT * FROM cities LEFT JOIN persons ON cities.id = persons.sity_id LEFT JOIN transactions AS t ON persons.id = t.to_person_id OR persons.id = t.from_person_id GROUP BY count(cities.id) DESC LIMIT 1,1';
		$this->getResult($sql);
	}

	public function query3($city)
	{
		$sql = 'SELECT * FROM transaction 
					WHERE from_person_id 
						IN (SELECT id FROM persons JOIN cities ON id = persons.city_id WHERE cities.name = "' . $city . '") 
						AND to_person_id IN (SELECT id FROM persons JOIN cities ON id = persons.city_id WHERE cities.name = "' . $city . '")';
		$this->getResult($sql);
	}

	private function getResult($sql)
	{
		$result = mysqli_query($this->connect, $sql);
		while ($row = mysqli_fetch_array($result)) 
		{
		    echo implode(" ", $row);
		}
	}

}