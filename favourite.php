<?php
	include("includes.php");
	
				$q=mysql_query("select * from wp_appdata_verification");
			
				echo "Fav cats are :<br>";
				while($row=mysql_fetch_array($q))
				{	
					
					$max=$row['correct']+$row['incorrect'];
					
					if($max>5)
					{
							echo $row['category']." and ";
							echo $row['name']."<br>";
					}
					else
					{
							//echo "enough data not avail";
					}
				}
	
?>