<!DOCTYPE HTML>
<html>
<head>
  <title>II - PHP põhitõed</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css" type="text/css">

</head>
<body>
  <h1>PHP</h1>
  <?php 
    echo "Tere! " . "Siin on teine tekst. " . "Siin ka." ;
    echo "<br>";
    echo "<p>Järgmine rida</p>";
   ?>
   <br>
   <h2>Arvutamine</h2>
   <p>Siin teeme erinevaid tehteid</p>
   	<!-- Siin on HTMLi kommentaar -->
   <?php 
   		//Siin on PHP kommentaar.
   		#Siin on kommentaar#
   		/*Siin on kommnentaar*/
   		echo "Nelja ja viie summa on " . (4 + 5);
    ?>
   <br>
   <?php echo 4 - 5 ?>
   <br>
   <?php echo 4 * 5 ?>
   <br>
   <?php echo 4 / 5 ?>
   <h2>Muutujad</h2>
   <?php
   	$number=5-4;
   	$number2 = 9;
   	$text = "Kahe arvu summa on ";
   	echo $text . "" . ($number + $number2);
   	echo "<br>";
   	echo $number . $number2;
   	echo "<br>";
   	echo $number + $number2;
   	echo "<p>Siin tuleb list</p>
   		<ul>
   			<li>".$text."</li>
   			<li>".($number + $number2)."</li>
   		</ul>";
   ?>

</body>
</html>
