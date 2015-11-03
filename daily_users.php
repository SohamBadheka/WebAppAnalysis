<?php
	include("includes.php");
	include("nav.php");

		?>
<body>
<div class="jumbotron">
<?php


$today = Date("Y-m-d h:i") . "<br>";



$q=mysql_query("select timestamp from wp_app_users");
$i=0;

while($rows=mysql_fetch_array($q))
{
	
	$splitTimeStamp = explode(" ",$rows['timestamp']);

	
	$date = $splitTimeStamp[0];
	

	if($date==$today)
	{
		$i++;
	}

}
echo "<center>This shows the today's users and the users between a certain time !"."<br>";
echo $i." users signed up today !!!</center>";

?>
</div>

</form>



</body>
</html>

