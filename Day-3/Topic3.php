<?php
$arrayName = array("Bangladesh" =>"Dhaka" );
$arrayName2 = array("Bhutan"=>"Thimphu","Bangladesh"=>"Rajshahi");
$arrayName3= array("Australia"=>"Canberra","Bangladesh"=>"Barishal");
$arrayName4= array("India"=>"New Delhi","Bangladesh"=>"Khulna");
$arrayName5= array("Uganda"=>"Kampala","Thailand"=>"Bangkok","Bangladesh"=>"Bogura" );// More then one multiple Array. 

$array = array($arrayName,$arrayName2,$arrayName3,$arrayName4,$arrayName5 ); //$array are 5 in 1 array
for ($i=0; $i <sizeof($array) ; $i++) { 
	echo $array[$i]["Bangladesh"]."<br>"; // Output where was value of Bangladesh
}
?>