<html>
	<head>
		<title>Information Gathered</title>
	</head>
	
	<body>
		
		<?php
			echo 'Hello World';
			//Comments
			/*Comments*/
			echo "<p>Data Proccessed</p>";
			
			date_default_timezone_set('US/Pacific');
			/*Date commands
			
					h:12 hr format
					H:24 hr format
					i:Minutes
					s:seconds
					a:am or pm
					
					l: Full Text for the day(Mon,Tues ,....)
					
					F:Full text of the month
					j:Day of the month
					S: SUffix for the day
					Y: 4 digit year
					
						
			*/
			
			//Echo the date
			echo date('h:i:s a, l F jS Y e');
			echo "<br />";
			echo 2+2;
		
		
			echo "<br /><hr />";
			
			//Let get the input from the format, reference by using the name
			$usersName = $_POST['username'];
			$streetAddress = $_POST['streetaddress'];
			$city = $_POST['city'];
			
			//Data types are automatically assigned, a variable is by default a null variable
			//Lets print out the data that we reveiced
			
			echo $usersName . "<br />";
			echo $streetAddress . "<br />" . "Turtle" . " Boi" . "<br />";
			echo $city . "<br />";
			
			//Constants
			define('PI', 3.14159);
			echo "<br />The value of PI is: " . PI . "<hr />";
			
			
			
			echo "<br />5+2  = " . (5+2); 
			echo "<br />5-2  = " . (double)(5-2); 
			echo "<br />5%2  = " . (5%2); 
			echo "<br /><hr />";
			
			
			$randNum = 5;
			$randNum = $randNum + 5;
			
			echo $randNum;
			
			
			//Referenceses
			$refToNum = &$randNum;
			
			$randNum = 100;

			echo '<br />$refToNum = '	. $refToNum . "<br />";		
			
			
			
			
			$numOfOranges = 33;
			$numOfBananas = 36;
			
			
			//else and else if work the almost the same as C++
			if(($numOfOranges > 25) && ($numOfBananas > 30)){
				echo '25% Discount' . '<br />';
			} 
			
			//Turnary Operator
			//      (condition) ? true : false;	
	
		echo (($numOfBananas < 22) ? 200:500); //Condition is false and therefore print 500
	
		echo "<br />";
			
		$num = 0;	
		for($num = 1; $num <= 20; $num++ ){
			if($num != 20){
				echo $num . " , ";
			}
			else{
				echo $num . "<br />";
			}
		}	
			
			
		//Arrays
		
		$bestFriends = array('Bob','Al','Charlie');
		
		
		echo 'Box 2 = ' . $bestFriends[2] . '<br />';
		$bestFriends[3] = 'Turtle';		
		
		//Print our all the contents of my array using a for each loop.
		foreach($bestFriends as $friend)
		{
			echo $friend ." ";
		}
		

		echo '<br /><br />Mulitdimension Array<br />';
		
        // Multidimensional arrays are arrays in arrays
		$customers = array(array('Derek', '123 Main', '15212'),
                               array('Sue', '124 Main', '15222'),
                               array('Bob', '125 Main', '15212'));

                                
            for($row = 0; $row < 3; $row++){
                for($col = 0; $col < 3; $col++){
                    echo $customers[$row][$col] . ', ';
                }
                echo '</br>';
            }

	
		echo '<hr />';
		
		$myString = "The hungry turtle";
	
		echo "My string is: " . $myString . " And the length is: " . strlen($myString);
		echo '<br / >';
		
		echo "My UpperCase string is: " . strtoupper($myString);

		//Functions
		function addNumbers($num1,$num2){
			return $num1 +$num2;
		}
		
		echo "<br />3+4 = " . addNumbers(3,4);
		
		
		?>
		
	
	</body>
</html>