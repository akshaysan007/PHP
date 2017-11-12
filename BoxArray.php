<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> <title>Box Array</title> 
<meta http-equiv="content-type"     content="text/html; charset=iso-8859-1" /> 
</head> 
<body> 

<?php 
// NAME: AKSHAY RAJSHEKAR SHIRAGUPPI( net id: arajs2)


$box = array( "Small Box" => array("Length" => 12, "Width" => 10, "Depth" => 2.5),  
			  "Medium Box" => array("Length" => 30, "Width" => 20, "Depth" => 4),
			  "Large Box" => array("Length" => 60, "Width" => 40, "Depth" => 11.5)); 
echo " <h1>Dimensions</h1>";
echo '<table border="1">';
echo '<tr><th>    </th><th>Length</th><th>Width</th><th>Depth</th></tr>';
foreach( $box as $key => $value )
{
echo '<tr><td>'.$key .'</td>';
foreach( $value as $a => $b )
{
echo '<td>'.$b.'</td>';
}
echo '</tr>';
}
echo '</table>';
echo " <h1> Volume </h1>";
$a = $box['Small Box']['Length'] * $box['Small Box']['Width'] * $box['Small Box']['Depth'] ;
$b = $box['Medium Box']['Length'] * $box['Medium Box']['Width'] * $box['Medium Box']['Depth'] ;
$c = $box['Large Box']['Length']* $box['Large Box']['Width'] * $box['Large Box']['Depth'];
echo '<table border="1">';
echo '<tr><th>Boxes</th><th>Volume</th></tr>';
echo '<tr><td>Small Box</td> <td>'. $a . '</td> </tr> <tr> <td> Medium Box </td> <td> ' . $b . '</td> </tr> <tr> <td> Large Box </td> <td> ' . $c . '</td> </tr> ';
echo '</table>'; 

?>
</body> 
</html> 

 
