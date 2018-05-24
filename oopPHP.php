<html>
<body>

<?php

	class Animal implements Singable{
		
		protected $name;
		protected $favorite_food;
		protected $sound;
		protected $id;
		
		//Static, we make this variable connected to all the animals created.
		public static $numberOfAnimals = 0;
		
		const PI = "3.14";
		
		
		function getName(){
			return $this->name;
		}
	

	//Default constructor
		function __construct(){
			$this->id = rand(100,10000);
			echo $this->id . " has been assigned as an ID number<br />";
			
			
			Animal::$numberOfAnimals++;
		}
	
		
		function __destruct(){
				echo "<br/>" . $this->name . " has been destroyed <br / >"; 
			
		}
		
			
		function __get($name){
			echo "Asked for "  . $name . "<br />";
			
			return $this->$name; 
		}
		
		
		function __set($name, $value)
		{
			switch($name){
				case "name":
				$this->name = $value;
				break;
				
				case "favorite_food":
				$this->favorite_food = $value;
				break;
				
				case "sound":
				$this->sound = $value;
				break;
				
				case "favorite_food":
				$this->favorite_food = $value;
				break;
				
				default: 
				echo $name . "Not Found<br />";
				
			}
			echo "Set " . $name . " to " . $value . "<br / >";			
		}


		function run()
		{
				echo $this->name . " runs<br / >";
		}		
		
		//By adding final, This will prevent a subclass from overiding the function.
		final function scream(){
			echo "<br />I am screaming<br/>";
			
			//If we overide this function then we will get many errors
		}
		
		
		function __toString(){
			return $this->name . " says " . $this->sound . 
				" give me some " . $this->favorite_food . "<br />" .
				"My id: " . $this->id . "<br />NumberOfAnimals: " . 
				Animal::$numberOfAnimals . "<br />" . 
				"<br />My Fav number: "  . Animal::PI . "<br / > <hr />";
			
		}
		
		
		
		//Define our implemented interface
		function sing(){
			
			echo $this->name . " sings BOWWWWwwww BOWWWWwwww<br />";
		}
		
		
		//A static function allows us to call this function without ever creating an object.
		//But we need to call it by     className::functionName();
		static function add($num1,$num2){
			
			return $num1 + $num2;
		}

	}

	
//Class inheritance
class Dog extends Animal implements Singable{
	
		//All the variables and function that appear in the Animal class 
		//will be inherited to this Dog Class
		
		
		
		
		
		//Function overide
		function run()
		{
				echo $this->name . " runs like crazy<br / >";
		}		
	
		
		function sing(){
			
			echo $this->name . " sings GRRRRrrrrrr GRRRRrrrrrr<br />";
		}
	
		
	
}


//Using an interface is a contract that any class that implements an interface
//Then this class will define the given function
interface Singable{
	//Function Prototype
	public function sing();
}



$animalOne = new Animal();

$animalOne->name = "Spot";
$animalOne->favorite_food = "Meat";
$animalOne->sound = "meow";

echo "<br / ><br />";

echo $animalOne;
				
//Create a new dog object
$myDog = new Dog();

 $myDog->name = "doggy";
 $myDog->favorite_food = "hamburger";
 $myDog->sound = "ROARR";

echo "<br / ><br />";

echo $myDog;

//Lets try ou the run function.

echo "We will make the animal object run: <br />";
$animalOne->run();

echo "We will make the dog object run: <br />"; 
$myDog->run();

echo "<hr />";


$animalOne->sing();
$myDog->sing();

echo "<hr />";



//Note the parameter is Singable becasue we use, implements,  to the classes
function make_sing(Singable $singingAnimal)
{
	 $singingAnimal->sing();
}


make_sing($animalOne);
make_sing($myDog);
echo "<hr />";




function singAnimal(Animal $ani)
{
	$ani->sing();
}

singAnimal($animalOne);
singAnimal($myDog);

echo "<hr />";


//We do not have to create objects if the function is static inside the class
echo "4+5 = " . Animal::add(4,5);

echo "<hr />";


//Clone an object
$animalClone = clone $animalOne;


abstract class RandClass{
	//You need to define this function on every class that implements this class
	abstract function multiply($n1,$n2);
	
}








?>

</body>
</html>