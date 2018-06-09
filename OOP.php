<meta http-equiv="refresh" content="5; URL=localhost:8888">

<?php

error_reporting(-1);
ini_set('display_errors', 'on'); 

class Human
{	
	// protected
	// private
	public $first_name = "Joe"; // definē parametrus
	public $last_name;
	public $age;
	protected $max_age = 100;

	protected function setAge($years) {
		if($this->age < $this->max_age) { // noteikti jābūt $this 
			$this->age = $years;
		}
	}

	public function getFirstName(){
		return ($this->first_name . "!");
	}

	public function setFirstName($value){
		$this->first_name = $value; // ???
	}

	public function getLastName(){
		return ($this->last_name);
	}

	public function setLastName($value){
		$this->last_name = $value;
	}

	public function getName(){
		return ($this->first_name . " " . $this->last_name);
	}

	public function setName($fname, $lname){
		$this->first_name = $fname; // ???
		$this->last_name = $lname;
	}

}

$adam = new Human; //jauna klase "new"
//var_dump($test);
// echo($adam->first_name);
// echo(" ");

// echo($adam->getFirstName());
// echo(" ");

echo($adam->setFirstName("Ādams"));
echo($adam->setLastName("Ādamsons"));

echo($adam->getName());
echo(" ");


$ieva = new Human;
$ieva->setName("Ieva", "Ādamsone");
$ieva->setAge(23);
echo($ieva->getName());


// echo($var);

?>




