<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> <title>Standard Palindrome</title> 
<meta http-equiv="content-type"     content="text/html; charset=iso-8859-1" /> 
</head> 
<body> 

<?php 
// NAME: AKSHAY RAJSHEKAR SHIRGAUPPI( net id: arajs2)

$string1 = "Madam, I’m Adam";

	 $modstring1 = strtolower($string1);
	
	$modstring2 = preg_replace('/[^A-Za-z0-9\-]/', '', $modstring1);

	 $modstring3 = str_replace(",", "", $modstring2);
	
	 $modstring4 = str_replace(" ", "", $modstring3);
	
	 $modstring5=strrev($modstring4);
	
     if ($modstring4==$modstring5)
     echo " &ldquo; $string1 &rdquo; is a palindrome. <br/>";
     else
	 echo " &ldquo; $string1 &rdquo; is not a palindrome. <br/>";
 	  
?>
</body> 
</html> 

 
