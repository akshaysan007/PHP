<?php
// NAME: AKSHAY RAJSHEKAR SHIRGAUPPI( net id: arajs2)
error_reporting(E_ERROR);
if (isset($_COOKIE['lastVisit']))
 $LastVisit = "<p>Your last visit was on "
 . $_COOKIE['lastVisit'];
else
 $LastVisit = "<p>This is your first visit!</p>\n";
setcookie("lastVisit", @date("F j, Y, g:i a"),time()+60*60*24*365);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Last Visit</title>
</head>
<body>
<?php echo $LastVisit; ?>
</body>
</html>
