<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> <title>Perfect Palindrome</title> 
<meta http-equiv="content-type"     content="text/html; charset=iso-8859-1" /> 
</head> 
<body> 


<?php 
// NAME: AKSHAY RAJSHEKAR SHIRGAUPPI( net id: arajs2)

$string1 = "hannah";
$string2 = "akshay";
$modstring1=strrev($string1);
$modstring2=strrev($string2);
 
     if ($string1==$modstring1)
     echo " $string1 is a palindrome. <br/>";
     else
	 echo "$string1 is not a palindrome. <br/>";
     
	 
	 if ($string2==$modstring2)
     echo " $string2 is a palindrome. <br/>";
     else
	 echo "$string2 is not a palindrome. <br/>";
     
	  
?>
</body> 
</html> 

