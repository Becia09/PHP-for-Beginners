<!DOCTYPE HTML>
<html lang="en">

<head>																	<!-- Treść komentarza -->
	<meta charset="UTF-8" />
	<title>Document </title>
	
</head>

<body>									<!--div.demo>ul>li*5>a{home}-->

	<?php
	
	$numberList = array(21, 5, 8, '345', 23, '<h1>Hello</h1>');
	
	//echo $numberList[0];
	
	print_r($numberList);
	
	echo "<br><br>";
	
	var_dump($numberList); //with data type
	
	echo "<br><br>";
	
//--------------------------------------association arrays

	$names = array("firstName" => 'Beata', "lastName" => "Nowak");
	
	echo $names['firstName'] . " " . $names['lastName'];
	
	?>
	
<body/>
</html>