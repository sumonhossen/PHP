
<h1 style="color: #54a0ff" ><i>Capital of Some Country</i></h1>
	<?php
$arrayName = array("Bangladesh" =>"Dhaka" ,"Bhutan"=>"Thimphu","Australia"=>"Canberra","India"=>"New Delhi
","Uganda"=>"Kampala","Thailand"=>"Bangkok" );//This is the Array. 

print_r($arrayName); //Print all item of the array.
echo "<br>";
?>
 <h1 style="color: #54a0ff" ><i>Capital Country of Bhutan</i></h1>
 <?php
echo $arrayName["Bhutan"]; // Output Only for one item.
?>