<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP*/

	echo "Step 1:<br>";
	if (10 < 5)
	{
		echo "anythink";
	}
	elseif (8 === "fds")
	{
		echo "nothing important";
	}
	else
	{
		echo "I love PHP";
	}
	echo "<br><br>";

	/*Step 2: Make a forloop  that displays 10 numbers*/
	echo "Step 2:<br>";
	for ($i = 0; $i < 20; $i = $i + 2)
	{
		echo $i . "<br>";
	}
	echo "<br>";
	
	/*Step 3 : Make a switch Statement that test againts one condition with 5 cases*/
	echo "Step 3:<br>";
	$number = 15;
	
	switch ($number)
	{
		case 2:
		echo "case 2";
		break;
		
		case 3:
		echo "case 3";
		break;
		
		case 5:
		echo "case 5";
		break;
		
		case 15:
		echo "case 15";
		break;
		
		case 20:
		echo "case 20";
		break;
		
		default:
		echo "default";
	}
	
	
?>


</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>