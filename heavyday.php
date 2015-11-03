
<?php
	include("includes.php");
	include("nav.php");
	
?>
<div class="container">
<div class="jumbotron">
<center><h2>Heavy days for the downloads throughout is </h2></center>

</div>
<?php
		$q = mysql_query("select * from wp_app_users where timestamp!='0000-00-00 00:00:00'");
		
		$a=array("");
		
		$count=0;
	
		$strtdate="2014-08-02";
		
		$max=0;
		while($rows=mysql_fetch_array($q))
		{	
		
			$splitTimeStamp = explode(" ",$rows['timestamp']);

			$date = $splitTimeStamp[0];
			//echo $date."<br>";
	
			if($date==$strtdate)
			{
					
					$count++;
						
			}
		
			else
			{
				//echo "<br><br>".$strtdate." ";
				if($max<$count)
				{
					$max=$count;
					array_push($a,$date);
				}
				
				//array_push($a,$max);
				//print_r($a);
			
				$strtdate=$date;
				$count=0;
			}	
		
		}
		echo "<br><h2> On, |".max($a)."| there were |".$max."| downloads which is the Heavyday for downloads!</h2>";

?>
</div>
</body>
</html>
	
	