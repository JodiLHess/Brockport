<?php
	include 'headerVendor.php';
?>
<?php

function show_order($result, $orderStatus)
{
  //----------------------------------------------------------
  // Start the html page
  echo "<HTML>";
  echo "<HEAD>";
  echo "</HEAD>";
  echo "<BODY>";


   //While there are more rows in the $result, get the next row
   //as an associative array
   while ($row = mysql_fetch_assoc($result))
   {
		 $orderid = $row['OrderId'];
		 $vendorid = $row['VendorId'];
		 $storeid = $row['StoreId'];
		 $orderdatetime = $row['DateTimeOfOrder'];
		 $status = $row['Status'];
		 $completedatetime = $row['DateTimeOfFulfillment'];

		 echo"
	 		<div id='callToAction'>
				<br>
	 			<h2>Order ID $orderid: $orderStatus </h2>
	 		</div>
	 		";


		 echo"
		 <table name='reportTable'>
		 		<th colspan='3'></th>
		 </table>



		 <form action='' method='post'>
			 <table align='center'>

			 <tr>
				 <td><p style=\"padding-right: 30px;\" align='right'>Nanno's Foods Store Location:</p></td>
				 <td><p style=\"padding-right: 30px;\" align='left'>$storeid</p></td>
			 </tr>
			 <tr>
	 			 <td><p style=\"padding-right: 30px;\" align='right'>Date and Time of Order Placement:</p></td>
	 			 <td><p style=\"padding-right: 30px;\" align='left'>$orderdatetime</p></td>
	 		 </tr>
			 <tr>
				 <td><p style=\"padding-right: 30px;\" align='right'>Date and Time of Order Fulfillment:</p></td>
				 <td><p style=\"padding-right: 30px;\" align='left'>$completedatetime</p></td>
			 </tr>
			</table>
		 ";

		 echo"
			<p align='center'>-----------------------------------------------------------------------------------------------</p>
		<table align='center'>

			<tr>
				<th><font color='black'><u><strong><p style=\"padding-right: 30px;\" align='center'>Item Description</p></font></strong></u></td>
				<th><font color='black'><u><strong><p style=\"padding-right: 30px;\" align='center'>Quantity</p></font></strong></u></td>
			</tr>


		 ";

		 $order_sql = "SELECT * FROM OrderDetail WHERE (OrderId = $orderid);";
		 $order_result = mysql_query($order_sql);

		 // Get the value of each orderdetail ordered within the given order
		 $count = 0;
		 $item_array = array();
		 while($order_row = mysql_fetch_assoc($order_result))
		 {
			 $count++;
			 $itemid = $order_row['ItemId'];
			 $qty = $order_row['QuantityOrdered'];

			 $item_sql = "SELECT Description, Size FROM InventoryItem WHERE (ItemId = $itemid);";
			 $item_result = mysql_query($item_sql);

			 // Get the description and size from each item in the order
			 while($item_row = mysql_fetch_assoc($item_result))
			 {
				 $_id_for_next_item = "item".$count;
				 $_description = $item_row['Description'];
				 $_size = $item_row['Size'];
				 echo"
				 	<tr>
				 		<td><p style=\"padding-right: 30px;\" align='left'>".$_description.", ".$_size."</p></td>
						<td><input type='text' size='5' id='".$_id_for_next_item."' value='$qty' readonly/></td>
					</tr>
				 ";
			 }
		 }

	}




	echo "</table>";
	echo "</form>";
	echo "<hr/><br><br>";



  echo "</BODY>";
  echo "</HTML>";


}



function show_order_not_found($message)
{
  //----------------------------------------------------------
  // Start the html page
  echo "<HTML>";
  echo "<HEAD>";
  echo "</HEAD>";
  echo "<BODY>";


  // If the message is non-null and not an empty string print it
  // message contains the lastname and firstname
  if ($message)
  {
    if ($message != "")
       {
	 echo '<center><font color="blue">'.$message.'</font></center><br />';
       }
  }



	echo "</BODY>";
	echo "</HTML>";
}
?>
