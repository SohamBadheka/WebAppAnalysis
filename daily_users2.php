<?php
	include("includes.php");
	include("nav.php");
?>

<form name="f" action="daily_users.php" method="post">
<p>From :<input type="date" name="from"><br>
<p>To : <input type="date" name="to"><br>
<input type="submit" value="Submit">

<?php	

 if(isset($_POST['from']) && isset($_POST['to']))
 {
		$count=0;
		$date_array=array("");
		
		$from1 = $_POST['from'];
		$from = date("Y-m-d", strtotime($from1));
		
		$to1 = $_POST['to'];
		$to = date("Y-m-d", strtotime($to1));
	
		
		$q1=mysql_query("select timestamp from wp_app_users");
		
		while($rows1=mysql_fetch_array($q1))
		{

			$splitTimeStamp = explode(" ",$rows1['timestamp']);
			
			$date = $splitTimeStamp[0];
			array_push($date_array,$date);
			
		}
		
		$min_value="2014-08-02";
		$max_value=max($date_array);
		
		if($to<$min_value && $from<$min_value)
		{
			echo "data unavailable";
		}
		if($to>$max_value && $from>$max_value)
		{
			echo "data unavailable";
		}
		//echo $from." is less than ".$min_value;
		
		$q2=mysql_query("select * from wp_app_users WHERE $to>=$min_value AND $from<=max_value");
			if($from<$min_value && $to<$min_value)
			{
				
			}
			else if($from=$min_value && $to=$min_value)
			{
				while($rows2=mysql_fetch_array($q2))
				{
					$count++;	
				}
			}
			else if($from<=$min_value && $to<=$max_value)
			{
				while($rows2=mysql_fetch_array($q2))
				{
					$count++;	
				}
			}
			else if($from>=$min_value && $to>=$max_value)
			{
				while($rows2=mysql_fetch_array($q2))
				{
					$count++;	
				}
			}
			else
			{
				
			}

		echo $count;
}
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

