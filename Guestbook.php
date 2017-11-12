<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> <title>Guest book</title> 
<meta http-equiv="content-type"     content="text/html; charset=iso-8859-1" /> 
</head> 
<body> 
<h1>Guest Book</h1> 
<?php 
// NAME: AKSHAY RAJSHEKAR SHIRAGUPPI( net id: arajs2)
if (isset($_GET['action'])) 
{
     if ((file_exists("Guest/books.txt")) && (filesize("Guest/books.txt")!= 0))
	 {
	 $GuestArray = file("Guest/books.txt");
	 switch ($_GET['action'])
	 {
	 case 'Remove Duplicates':
     $GuestArray = array_unique($GuestArray);
     $GuestArray = array_values($GuestArray);
     break;
	 case 'Sort Ascending':
     sort($GuestArray);
     break;
	 } // End of the switch statement
	 
	 
	 if (count($GuestArray)>0)
	 {
     $NewGuest = implode($GuestArray);
     $GuestStore = fopen("Guest/books.txt","wb");
     if ($GuestStore === false)
	 echo "There was an error updating the Guest ﬁle\n";
     else
	 {
	 fwrite($GuestStore, $NewGuest);
	 fclose($GuestStore);
     }
	 } 
	 else 
	 unlink("Guest/books.txt");
     } 
}


if (isset($_POST['submit']))
 {
 $GuestToAdd = stripslashes($_POST['Name']);
 $EmailToAdd = stripslashes($_POST['Email']) . "\n";
 $guest= $GuestToAdd  . "," . $EmailToAdd;
 $ExistingGuests= array();
	if (file_exists("Guest/books.txt") && filesize("Guest/books.txt")> 0)
	{
	$ExistingGuests = file("Guest/books.txt");
	}
	if (in_array($guest, $ExistingGuests))
	{ 
	echo "<p>The Details you entered already exists!<br />\n";
	echo "Your Name was not added to the list.</p>";
	} 
	else
	{
	$GuestFile = fopen("Guest/books.txt", "ab");
		if ($GuestFile === false)
		echo "There was an error saving your Details!\n";
		else
		{
		fwrite($GuestFile, $guest);
		fclose($GuestFile);
		echo "Your Details has been added to the list.\n";
		}
	}
 }
 
 
 if ((!file_exists("Guest/books.txt"))|| ( filesize("Guest/books.txt") == 0))
 echo "<p>There are no Guests in the list.</p>\n";
 else
 {
 $GuestArray = file("Guest/books.txt");
 echo "<table border=\"1\" width=\"100%\"  style=\"background-color:lightgray\">\n";
 echo " <tr> <th> Name </th> <th> Email adress </th> </tr>";

 foreach ($GuestArray as $Guest)
 {
  echo "<tr>\n";
 $Guest1=explode(",", $Guest);
 echo "<td>" . htmlentities($Guest1[0]) . "</td><td>" . htmlentities($Guest1[1]) . "</td>"; 
 echo "</tr>\n";
 }
 echo "</table>\n";
 }
 
?>
<p>
 <a href="Guestbook.php?action=Sort%20Ascending"> Sort Guest List</a><br />
 <a href="Guestbook.php?action=Remove%20Duplicates"> Remove Duplicate Guest Names</a><br />
 
</p> 
<form action="Guestbook.php" method="post">
 <p>Enter your Details</p> <p>Name: <input type="text" name="Name" /></p> <p>Email address: <input type="text" name="Email" /></p>
 <p><input type="submit" name="submit" value="Add to Guest Book" /> <input type="reset" name="reset" value="Reset" /></p>
</form> 


</body> 
</html> 

 
