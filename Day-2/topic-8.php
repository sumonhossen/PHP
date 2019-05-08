<?php //Php code starting
$x=array("Sumon","Saiful","Fahima","Faruk","Jhorna"); //Create a Array.Multiple data insert in Program using Array.
$itemcount=sizeof($x); //Count how many Item in Array.

echo ("<i style='color: chocolate'>Total Item:</i>")."<br>";
echo $itemcount ."<br>"; //print how many Item in Array.

echo ("<i style='color: chocolate'>Print Item:</i>")."<br>";
echo $x[2] ."<br>"; /*If we want print 3 no Item.[2] that's are index number of the array.
                    In this array has 5 Item and there Index [0]-[4], we call [2] so print 3 no Item*/
echo $x[1] ."<br>"; //Print Index no [1]
echo $x[0] ."<br>"; //Print Index no[0]
echo $x[4] ."<br>"; //Print Index no[4]
echo $x[3] ."<br>"; //Print Index no[3]

echo ("<i style='color: chocolate'>print_r:</i>")."<br>";
print_r($x); //Print all item with there Index number

echo "<br>";

echo ("<i style='color: chocolate'>var_dump:</i>")."<br>";
var_dump($x); //Print item more details....Index number,how many string in every item
?>
