<!DOCTYPE html>
<html lang="nl">
	 <head>
		<meta charset="utf-8">
		<meta name="description" content="BAP">
		<meta name="author" content="Justin">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>PHP String handler</title>
	</head>

     <style>
         .showSpaces{
             white-space:pre;
         }
     </style>

	 <body>
		 <?php
		 if ( !empty($_GET)) {
				 $input1 =  $_GET['input1']; // input uit html
				 $input2 =  $_GET['input2']; // input uit
                 $string3 = $input1 . $input2;
			 }
			else{
				 $input1 = ""; //lege string
				 $input2 = ""; //lege string
			 }
		  ?>
		<div class="wrapper">
			<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<fieldset>
				 <legend>Type wat in deze 2 velden</legend>
				 <input type = "text" name = "input1"  placeholder = "string 1" value="<?php echo $input1;  ?>"><br>
				 <input type = "text" name = "input2"   placeholder = "string 2" value="<?php echo $input2;  ?>">
				 <input type = "submit"  id = "submit" name = "submit" value = "submit">
			 </fieldset>
			</form>
			<hr>
			<?php
					// "schrijf hier de benodigde code"
			?><ul>
					<li class="showSpaces">Ingevoerde string 1:  <?php  echo $input1;  ?> </li>
					<li class="showSpaces">Ingevoerde string 2:  <?php  echo $input2;  ?> </li>
                <li>String 1 getrimd trim():  <?php echo trim($input1);  ?> </li>
                <li>String 1 getrimd trim():  <?php echo trim($input2);  ?> </li>
                <li>String 3 is de concatenation van string 1 en string 2:  <?php echo trim($string3);  ?></li>
                <li>De lengte van string 3 is: <?php echo strlen($string3);  ?> characters</li>
                <li>Zoeken naar spaties. Er zit een spatie op positie  <?php echo strpos($string3, " ");  ?></li>
                <li>Zoeken naar @. Er zit een @ op positie <?php echo strpos($string3, "@");  ?></li>
                <li>Zoeken naar "." . Er zit een "." op positie <?php echo strpos($string3, ".");  ?></li>
                <li>Zoek naar substring "PHP" vervang dit door "NodeJS" <?php echo str_replace("PHP","NodeJS", $string3);  ?></li>
                <li>Wijzig de eerste letter van string 3 naar hoofdletter: <?php echo ucfirst($string3);  ?></li>
                <li>Alles in hoofdletters:<?php echo " " . "String 1: " . strtoupper($input1)," " . "String 2: " . strtoupper($input2)," " . "String 3: " . strtoupper($string3);?> </li>
            </ul>
			</div>
	 </body>
</html>
