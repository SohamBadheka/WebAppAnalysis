<?php
	include("includes.php");
	function max()
			{
				while($row=mysql_fetch_array($q))
				{	
					
					$max=$row['correct']+$row['incorrect'];
					if($max>5)
					{
							echo "fav cat :". $row['category'];
					}
					else
					{
							echo "enough data not avail";
					}
				}
			}
?>