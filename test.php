
<?php
	include("includes.php");
	include("nav.php");
	
?>
<div class="container">
<div class="jumbotron">
<center><h2>Heavy days for the downloads throughout is </h2></center>

</div>
<?php
		$q = mysql_query("select * from tempinfo ");
		
		$t=41;
		$count=1;
		$numrows=mysql_num_rows($q);
		echo $numrows;
		l1: while($rows=mysql_fetch_array($q))
		{	
			$count++;
			//echo $count; 
			$splitTimeStamp = explode("-",$rows['range']);

			$min_temp = $splitTimeStamp[0];
			$max_temp = $splitTimeStamp[1];
			
			if($count>$numrows)
			{
				echo "no entry found";
			}
			if($min_temp < $t && $t < $max_temp)
			{
				echo $rows['info'];
			}
			else
			{
				goto l1;
			}
		}
?>
</div>
</body>
</html>
	
	