
<?php
$bajar=array("চাল","ডাল","তেল","লবন","সবজি","মাছ","মাংস","ডিম","আলু");// This is Array
$totalSize=sizeof($bajar);//Count Item Of Array
 ?>
<h1 style="color: chartreuse">Ajker Bazar</h1>
<h2 style="color: crimson">Date:05/05/11</h2>

<ol>

    <h3 style="color: darkmagenta">Bazar List </h3>
        <?php
    for($i=0;$i<$totalSize;$i++){ // Using Loop for Create a List
      ?>
    <li> <?php echo $bajar[$i]; // Print Item around loop and print list until last Index ?></li>
    <?php
}
    ?>
</ol>
