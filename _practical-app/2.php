<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		

<?php



		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:*/
		
		$number1 = 10;
		$number2 = 20;
		

		/*Step 2: Add the two variables and display the sum with echo:*/
		
		$sum = $number1 + $number2;
		echo $sum . '<br><br>';

		/*Step3: Make 2 Arrays with the same values, one regular and the other associative*/

		 $array1 = array(5, 9, 12);
		 $array2 = array("first" => 5, "second" => 9, "third" => 12);
		 
		 print_r ($array1);
		 echo "<br>";
		 
		 print_r ($array2);
		 echo "<br>";
		 
		 $i = 1;
		 foreach ($array1 as $element)
		 {			
			 echo "array1 - element $i" .": ". $element . "<br>";
			 echo "array2 - element $i" .": ". $element . "<br>";
			 $i++;
		 }
	
		


		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>