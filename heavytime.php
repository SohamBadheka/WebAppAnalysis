
<?php
	include("includes.php");
	include("nav.php");
	
?>
<div class="container">
<div class="jumbotron">
<center><h2>Heavy time for the downloads throughout is </h2></center>

</div>
<?php
		$q = mysql_query("select * from wp_app_users where timestamp!='0000-00-00 00:00:00'");
		
		$a=array("");
		
		$count1=0;
		$count2=0;
		$count3=0;
		$count4=0;
	
		$strttime="00:00:00";
		
		
		$max=0;
		for($i=0;$rows=mysql_fetch_array($q);$i++)
		{
				
				$splitTimeStamp = explode(" ",$rows['timestamp']);

				$time = $splitTimeStamp[1];
				
				$incr="06:00:00";
				$aftrtime=$time+$incr;
				
				if($strttime < $time && $time <= $incr)
				{
					$count1++;
				}
				else if($incr < $time && $time <= 2*$incr)
				{
					$count2++;
				}
				else if(2*$incr < $time && $time<= 3*$incr)
				{
					$count3++;
				}
				else
				{
					$count4++;
				}
		}
		echo "There were ".$count1." downloads in late night, between  12:00AM and 6:00AM.<br>";
		echo "There were ".$count2." downloads in early morning, between  06:00AM and 12:00PM.<br>";
		echo "There were ".$count3." downloads in afternoon, between  12:00PM and 06:00PM.<br>";
		echo "There were ".$count4." downloads in evening and night, between  06:00PM and 12:00AM.<br>";
		
?>
</div>
</body>
</html>
	
	