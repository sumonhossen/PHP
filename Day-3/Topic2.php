<?php
$arrayName = array("Bangladesh" =>"Dhaka" ,"Bhutan"=>"Thimphu","Australia"=>"Canberra","India"=>"New Delhi
","Uganda"=>"Kampala","Thailand"=>"Bangkok" );//This is the Array. 
?>
<table> <!-----Create a table---->
	<?php
foreach ($arrayName as $key => $value) { //Loop
	?>
	<tr> <!--Table Row----->
		<td><?php echo $key; ?></td> <!---Table Data of key---->

	<td><?php echo $value; ?></td> <!---Table Data of Value---->
	</tr>
	
	<?php
}
	?>
</table>