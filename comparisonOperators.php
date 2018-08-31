<!DOCTYPE HTML>
<html lang="en">

<head>																	<!-- Treść komentarza -->
	<meta charset="UTF-8" />
	<title>Document </title>
	
</head>

<body>

	<!--<h1>Comparison operators</h1>
	<pre>							<!--with pre text is displayed in preserves both spaces and line breaks-->
	<!--
	equal ==
	identical ===
	compare > < >= <= <>
	not equal !=
	not identical !==
	
	</pre>
	
	
	<h1>Logical operators</h1>
	<pre>
	
	And &&
	Or  ||
	Not !
	
	</pre> -->
	
	<?php
	
	if (4 === "4")
	{
		echo "it is true (identical)";
	}
	
	if (4 == "4")
	{
		echo "it is true (equal)";
	}
	
	
	if (4 === 5 || 4 === 4)
	{
		echo "it is true (||)";
	}
	
	if (4 < 4 && 4 < 5)
	{
		echo "it is true (&&)";
	}
	
	
	?>
	
	
<body/>
</html>