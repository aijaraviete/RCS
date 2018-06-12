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
		$this->first_name = $value; // ??? sintakse ->
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
//$ieva->setAge(23);
echo($ieva->getName());


// PRAKTISKAIS DARBS

error_reporting(-1);
ini_set('display_errors', 'On');

class Device {

	public $year;
	public $manufacturer;
	public static $all_manufacturers;
	// protected $servername etc

	function __construct(){
		print("Parent Construction!");

		$servername = "localhost";
		$username = "root";
		$password = "";
		$db = "sveiksSQL";

		$conn = mysqli_connect($servername, $username, $password, $db);

		$sql = "SELECT * FROM `microphones` where id=3";

		$result = $conn->query($sql);
		// var_dump($result);

		if($result->num_rows>0){
			// echo('Ir rezultāts! - - - - - ');

	   		while($row = $result->fetch_assoc()) 
	   		{
	   			// var_dump($row);
	   			$this->setYear($row['year']);
	   			$this->setManufacturer($row['manufacturer']);
	   		}	        
	    
		}
		else{
			echo("Nav rezultāts");
		}
	}
	
	public function getYear(){
		return $this->year;
	}
	public function setYear($year){
		$this->year = $year;
	}
	public function getManufacturer(){
		return $this->company;
	}
	public function setManufacturer($company){
		$this->company = $company;
	}
	public function getFullInfo(){
		return ($this->company . " " . $this->year);
	}
	public static function getAllManufacturers(){		
		//db?
		return ["Siemens", "Bosch", "Apple", "Audi"];
		// masīvs // reālā situācijā info no datu bāzes par visiem ražotājiem
	}
}

class Microphone extends Device{ // pārrakstīt metodi galvenajā klasē,pārējais viss mantojas no galvenās klases // automātiski ņem augstāko klasi
	public $color;
	function __construct(){
		parent::__construct();
		print("Child Construction!");
		parent::__construct();
	}
	public function getFullInfo(){
		return ($this->company . " " . $this->year . " ( mikrofons! ) ");
	}
}
// $device = new Device();
// $device->setYear(2017);
// $device->setManufacturer("Siemens");
// print($device->getFullInfo());
// var_dump(Device::getAllManufacturers()); // statiskā metode ar diviem punktiņiem // statiskās funkcijas paredzētas visai klasei kopā,nevis konkrētam objektam
$mikrofons = new Microphone();
// $mikrofons->setYear(2016);
// $mikrofons->setManufacturer("Samsung");
print($mikrofons->getFullInfo());

?>




