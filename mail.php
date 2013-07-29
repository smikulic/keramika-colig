<?php
	$ime = $_POST['ime'];
	$prezime = $_POST['prezime'];
	$email = $_POST['email'];
	$upit = $_POST['upit'];
	$mailto = "sinisa.mikulic@gmail.com";
		
	$poruka = "Mail od: " . $ime . " " . $prezime . "</br>" . "E-mail: " . $email . "</br>" . "Upit: " . $upit;
		
	 if (mail($mailto, "Keramika Colig - Upit klijenta", $poruka)) 
	 {
   		echo("<p>Poruka poslana!</p> Kliknite na <a href='index.html'>link</a> za povratak!");
 	 } 
 	else 
 	 {
   		echo("<p>Poruka nije uspješno poslana... Kliknite na <a href='index.html'>link</a> za povratak!</p>");
  	}	
?>