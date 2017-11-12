<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> <title>Pay Check</title> 
<meta http-equiv="content-type"     content="text/html; charset=iso-8859-1" /> 
</head> 
 <body>
 <?php
  // NAME: AKSHAY RAJSHEKAR SHIRGAUPPI( net id: arajs2)

  $hoursWorked = validateInput ($_POST['Hours'], "Hours");
  $wages = validateInput($_POST['Wage'], "Wage");
  
  function displayRequired($fieldName)
    {
  echo "The field \"$fieldName\" is required to calculate the wages earned.<br />\n";
  	}
  function validateInput($data, $fieldName) 
  {
 	global $errorCount;
 	
 	if (empty($data)) 
	{
 	displayRequired($fieldName);
 	$errorCount++;
 	$retval = "";
 	}
 	else{
 	return ($data);
 	}
  }
  $errorCount=0;
 
 function redisplayForm($hoursWorked, $wages)
 {
 ?>
 <form name="paycheck" action="process_Paycheck.php" method="post">
 <p>Number of Hours Worked: <input type="text" name="Hours" value="<?php echo $hoursWorked; ?>" /><br />
 Hourly Wage: <input type="text" name="Wage" value="<?php echo $wages; ?>"/><br />
 
 <input type="reset" value="Clear Form" />&nbsp;&nbsp;<input type="submit" name="Submit" value="Send Form" />
 </form>
 <?php
 }
 if ($errorCount>0) 
  {
 	echo "Please enter the information.<br />\n";
 	redisplayForm($hoursWorked, $wages);
  }
 if (is_numeric($hoursWorked) && is_numeric($wages))
  {
  	if ($hoursWorked <= 40)
 	{
 	$payCheck = ($hoursWorked * $wages);
 	echo "<h1>Your Wages Earned</h1><p>You worked <strong>$hoursWorked</strong> hours at a rate of <strong>$$wages</strong> an hour.</p> <h3>Your pay total is:  <strong>$$payCheck</strong></h3><br /><p><a href='Paycheck.html'>Try Again?</a></p>";
    }
 if ($hoursWorked > 40)
 	{
     $payCheck = ($hoursWorked * $wages) + (($hoursWorked - 40) * $wages * 1.5);
     echo "<h1>Your Wages Earned</h1><p>You worked <strong>$hoursWorked</strong> hours at a rate of <strong>$$wages</strong> an hour.</p> <h3>Your pay total is:  <strong>$$payCheck</strong></h3><br /><p><a href='Paycheck.html'>Try Again?</a></p>";
 	}
  }
 else
 {
 echo  "<p>Only numbers can be used.  Press the back button to try again.</p>";
 }
 
 ?>
 </body>
 </html> 