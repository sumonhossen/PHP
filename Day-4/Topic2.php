<?php
$url="http://app.rabbil.com/android/homelast10.php"; //This is others database in this formate we can use there data but not possible      change or modifey.
$received=file_get_contents($url); // Received the data from link
$decoded=json_decode($received,true); //Decoded the database
$size=sizeof($decoded['contents']); //Calculate the length of contents(DataBase Name)

for ($i=0; $i <$size ; $i++) { 
	$title=$decoded['contents'][$i]['title'];//Decoded the title.
		$videid=$decoded['contents'][$i]['videoid']; //Decoded the video.
		?>
		<iframe height="300px" width="450px" src="https://www.youtube.com/embed/<?php echo $videid;?>"></iframe> <!---For Video--->

		<h4><?php 	echo $title;?></h4> <!--use title-->
<?php
}
?>