<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> <title>Verify Intern Login</title> 
<meta http-equiv="content-type"     content="text/html; charset=iso-8859-1" /> 
</head> 
<body> 
<h1>College Internship</h1>
 <h2>Verify Intern Login</h2>
 <?php
 // NAME: AKSHAY RAJSHEKAR SHIRAGUPPI( net id: arajs2)

$errors = 0;
 $DBConnect = @mysql_connect("10.204.2.7", "arajs2", "6zYwTxBjyxMyzKPA");
 if ($DBConnect === FALSE)
 {
 echo "<p>Unable to connect to the database server. " . "Error code " . mysql_errno() . ": " . mysql_error() . "</p>\n";
 ++$errors;
 }
 else
 {
 $DBName = "chapter9_arajs2";
 $result = @mysql_select_db($DBName, $DBConnect);
 if ($result === FALSE)
 {
 echo "<p>Unable to select the database. " . "Error code " . mysql_errno($DBConnect) . ": " . mysql_error($DBConnect) . "</p>\n";
 ++$errors;
 }
 }
 
 $TableName = "interns";
 if ($errors == 0)
 {
 $SQLstring = "SELECT internID, first, last FROM $TableName" . " where email='" . stripslashes($_POST['email']) . "' and password_md5='" . md5(stripslashes($_POST['password'])) . "'";
 $QueryResult = @mysql_query($SQLstring, $DBConnect);
 if (mysql_num_rows($QueryResult)==0)
 {
 echo "<p>The e-mail address/password " . " combination entered is not valid. </p>\n";
 ++$errors;
 }
 else
 {
 $Row = mysql_fetch_assoc($QueryResult);
 $InternID = $Row['internID'];
 $InternName = $Row['first'] . " " . $Row['last'];
 echo "<p>Welcome back, $InternName!</p>\n";
 }
 }
 
 if ($errors > 0)
 {
 echo "<p>Please use your browser's BACK button to return " . " to the form and fix the errors indicated.</p>\n";
 }
 
 if ($errors == 0)
 {
 echo "<form method='post' " . " action='AvailableOpportunities.php'>\n";
 echo "<input type='hidden' name='internID' " . " value='$InternID'>\n";
 echo "<input type='submit' name='submit' " . " value='View Available Opportunities'>\n";
 echo "</form>\n";
 }
 
 ?> 
</body> 
</html> 