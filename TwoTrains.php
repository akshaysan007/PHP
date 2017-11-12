<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> <title>Two Trains</title> 
<meta http-equiv="content-type"     content="text/html; charset=iso-8859-1" /> 
</head> 
<body> 
 <?php
//NAME: AKSHAY RAJSHEKAR SHIRAGUPPI( net id: arajs2)
/*function validateInput($data, $fieldName) {
        global $errorCount;
        if (empty($data)) 
        {
        echo "\"$fieldName\" is a required field.<br />\n";
                ++$errorCount;
                $retval = "";
        }
        else
        { 
                $retval = trim($data);
                $retval = stripslashes($retval);
        }
                return($retval);
}
function validateDistance($data, $fieldName) 
{
        global $errorCount;
        if (empty($data)) 
        {
        echo "\"$fieldName\" is a required field.<br />\n";
                ++$errorCount;
                $retval = "";
        }
        else
        { 
        $retval = trim($data);
        $retval = stripslashes($retval);
        $pattern = "/^[\w-]+(\.[\w-]+)*@"."[\w-]+(\.[\w-]+)*".
                "(\.[[a-z]]{2,})$/i";
        if (preg_match($pattern, $retval)==0)
        {
        echo "\"$fieldName\" division by zero not allowed.<br />\n;";
        ++$errorCount;
        }
}
return($retval);}*/
function displayForm($SpeedA, $SpeedB, $Distance)
{
?>
<h2 style = "text-align:center">Two Trains</h2>
<form name="Two Trains" action="TwoTrains.php" method= "post">
        <p>SpeedA: <input type="integer" name="SpeedA" value="<?php echo $SpeedA; ?>" /></p>
        <p>SpeedB: <input type="integer" name="SpeedB" value="<?php echo $SpeedB; ?>" /></p>
        <p>Distance: <input type="integer" name="Distance" value="<?php echo $Distance; ?>" /></p>
        <p><input type="reset" value="Clear Form" />&nbsp;
        &nbsp;<input type="Submit" name="Submit" value="Send Form" /></p>
        </form>
<?php
}

        $ShowForm = TRUE;
        //$errorCount = 0;
        $SpeedA = "";
        $SpeedB = "";
        $Distance = "";
        if (isset($_Post['Submit'])) 
		{
                $SpeedA =$_POST['SpeedA'];
                $SpeedB =$_POST['SpeedB'];
                $Distance =$_POST['Distance'];
		}
        /*if ($errorCount==0)
                $ShowForm = FALSE;
        else
                $ShowForm = TRUE;
        }
        if ($ShowForm == TRUE)
        {*/
                if ($errorCount>0) 
				{
                        echo "<p>Please re-enter the speeds below.</p>\n";
                        displayForm($SpeedA, $SpeedB, $Distance);
                }
                else
                {
                $DistanceA = (($SpeedA / $SpeedB) * $Distance) /(1 + ($SpeedA / $SpeedB));
                echo "Distance Traveled By Train A = $DistanceA<br />";
                $DistanceB = $Distance - $DistanceA;
                echo "Distance Traveled By Train B = $DistanceB<br />";
                $TimeA = $DistanceA / $SpeedA;
                echo "Time Traveled By Train A = $TimeA<br />";
                $TimeB = $DistanceB / $SpeedB;
                echo "Distance Traveled By Train B = $TimeB<br />";
                }

?>
</body> 
</html> 