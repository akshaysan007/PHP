<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> <title>Online Orders</title> 
<meta http-equiv="content-type"     content="text/html; charset=iso-8859-1" /> 
</head> 
<body style="background-color:orange"> 
<h1>Order Here</h1>  
<style>
t1 {color: green;}
t2 { color: red; }
t3 { color: yellow;}
t4 { color : black; }
t5 { color : brown; }
label{
display:inline-block;
width:200px;
margin-right:30px;
text-align:right;
}
</style>
<form action="OnlineOrders.php" method="post" >
<table class="display" border="0" cellspacing="10" cellpadding="0">
  <tr>
	<th align="center" valign="middle"> <h2>Item</h2></th>
	<th align="center" valign="middle"><h2> Price </h2></th>
	<th align="center" valign="middle"><h2> Quantity </h2></th>
  
  </tr>
  <tr>
	<td align="center" valign="middle"><t1>Veg Pizza</t1></td>
	<td align="center" valign="middle">$5.00<input type="hidden" name="pizza_price" value="5" /></td>
	<td align="center" valign="middle"><input type="text" name="pizza_qty" size="3"  value="0"  /></td>
  
  </tr>
  <tr>
	<td align="center" valign="middle"> <t2>Chicken Pizza </t2></td>
	<td align="center" valign="middle">$7.00<input type="hidden" name="cpizza_price" value="7" /></td>
	<td align="center" valign="middle"><input type="text" name="cpizza_qty" size="3" value="0" /></td>
  
  </tr>
  <tr>
	<td align="center" valign="middle"><t3> Fries </t3></td>
	<td align="center" valign="middle">$4.00<input type="hidden" name="fries_price" value="4" /></td>
	<td align="center" valign="middle"><input type="text" name="fries_qty" size="3" value="0"/></td>
  
  </tr>
  <tr>
	<td align="center" valign="middle"><t4>Cola </t4></td>
	<td align="center" valign="middle">$2.00<input type="hidden" name="cola_price" value="2" /></td>
	<td align="center" valign="middle"><input type="text" name="cola_qty" size="3" value="0"/></td>
  
  </tr>
    <tr>
	<td align="center" valign="middle"><t5>Beer </t5></td>
	<td align="center" valign="middle">$1.00<input type="hidden" name="beer_price" value="1" /></td>
	<td align="center" valign="middle"><input type="text" name="beer_qty" size="3" value="0" /></td>
  
  </tr>

 
  <tr>
	<td></td>
	<td><input type="submit" name="submit1" value="Update"> <input type="submit" name="submit" value="Submit" /></td>
	<td></td>
	<td></td>
  </tr>
  
</table>
</form>
<?php 
// NAME: AKSHAY RAJSHEKAR SHIRAGUPPI( net id: arajs2)

if( isset($_POST['submit1']))
{
	if( empty($_POST['pizza_qty']) && empty($_POST['cpizza_qty']) && empty($_POST['fries_qty']) && empty($_POST['cola_qty']) && empty($_POST['beer_qty']) )
		echo "<strong> Enter quantity </strong>"; 
	else
	{
		$qpizza= $_POST['pizza_qty'];
		$qcpizza= $_POST['cpizza_qty'];
		$qfries= $_POST['fries_qty'];
		$qcola= $_POST['cola_qty'];
		$qbeer= $_POST['beer_qty'];
		 
		$ppizza= $_POST['pizza_price'];
		$pcpizza= $_POST['cpizza_price'];
		$pfries= $_POST['fries_price'];
		$pcola= $_POST['cola_price'];
		$pbeer= $_POST['beer_price'];
		
		$Total = $qpizza * $ppizza + $qcpizza * $pcpizza + $qfries * $pfries + $qcola * $pcola + $qbeer * $pbeer ;
			echo " <h4> Order Updated!!!!!!!!!</h4> \n";
		echo " <h2> Your total Price for the order is ".$Total. "</h2>";
		echo " \n Select the quantities again and hit submit to submit the order";
	}
}

if( isset ($_POST['submit']))
{
	$qpizza= $_POST['pizza_qty'];
		$qcpizza= $_POST['cpizza_qty'];
		$qfries= $_POST['fries_qty'];
		$qcola= $_POST['cola_qty'];
		$qbeer= $_POST['beer_qty'];
		 
		$ppizza= $_POST['pizza_price'];
		$pcpizza= $_POST['cpizza_price'];
		$pfries= $_POST['fries_price'];
		$pcola= $_POST['cola_price'];
		$pbeer= $_POST['beer_price'];
		
		$Total = $qpizza * $ppizza + $qcpizza * $pcpizza + $qfries * $pfries + $qcola * $pcola + $qbeer * $pbeer ;
	date_default_timezone_set("America/Chicago");

		$input = "Your Receipt: \n";
		$input1 = "Veg Pizza =".$_POST['pizza_qty']."\n";
		$input2 = "Chicken Pizza =".$_POST['cpizza_qty']."\n";
		$input3 = "Fries =".$_POST['fries_qty']."\n";
		$input4 = "Cola =".$_POST['cola_qty']."\n";
		$input5 = "Beer=".$_POST['beer_qty']."\n";
		$total= "The total for this order is :".$Total. "\n Thank you for the order";
$dateposted = date("Y-m-d-h-i-sa");
$fp = fopen("$dateposted.txt", "w"); 
fwrite($fp, $input).'&nbsp;'; 
	fwrite($fp, $input1).'&nbsp;'; 
	fwrite($fp, $input2).'&nbsp;';
	fwrite($fp, $input3).'&nbsp;';
	fwrite($fp, $input4).'&nbsp;';
	fwrite($fp, $input5).'&nbsp;';
	fwrite($fp, $total).'&nbsp;';
fclose($fp); 
echo " Your Order has been submitted \n";
echo " <h2> Your total Price for the order is ".$Total. "</h2>";
echo " \n The receipt has been saved in the file";
}

	
	
	
	
	
	
?>

</body> 
</html> 